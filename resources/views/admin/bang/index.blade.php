@extends('layouts.admin',['title'=>'Bangs'])

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bang List</h3>
                    <div class="float-right">
                        
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Bang ID</th>
                                <th>Type</th>
                                <th>First</th>
                                <th>Last</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Send Email</th>
                                <th>Send SMS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bangs as $bang)
                            <tr>
                                <td>{{ $bang->bang_id }}</td>
                                <td>
                                    {{ $bang->type }}
                                </td>
                                <td>
                                    @php
                                       $username = (isset($bang->user['name']))?$bang->user['name']:'';
                                       if(!empty($username)){
                                            $f = explode(" ",$username);
                                            $firstname = $f[0];
                                            $lastname = $f[1];
                                       }
                                    @endphp 
                                    {{ (isset($firstname))?$firstname:'' }}
                                </td>
                                <td> {{ (isset($lastname))?$lastname:'' }} </td>
                                <td> {{ (isset($bang->user['address']))?$bang->user['address']:'' }} </td> 
                                <td> {{ (isset($bang->user['mobile']))?$bang->user['mobile']:'' }} </td>
                                <td> {{ (isset($bang->user['email']))?$bang->user['email']:'' }} </td>
                                <td> <a href="{{ route("admin.bang.sendemail",$bang->id) }}" class="btn btn-success btn-sm">Send Now</a></td>
                                <td> <a href="{{ route("admin.bang.sendsms",$bang->id) }}" class="btn btn-success btn-sm">Send Now</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "ordering": false
        })
    });

    function showDeleteModel(id){
        Swal.fire({
            title: 'Do you want to delete the records?',
            showDenyButton: true,
            confirmButtonText: 'Yes',
            }).then((result) => {
            
            if (result.isConfirmed) {
               $.ajax({
                    url : '{{ url("admin/color/destroy") }}/'+id,
                    data : {
                        _token : "{{ csrf_token() }}",
                    },  
                    method : "post",
                    dataType: "json",
                    success : function(response){
                        if(response.status){
                            toastr.success(response.message);
                            setTimeout(function(){
                                location.reload();
                            }, 1000);
                            
                        }else{
                            toastr.error(response.message);
                        }
                    }
               });
            }
        })
    }
</script>

@endsection