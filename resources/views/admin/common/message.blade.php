<script>
<?php
if(Session::has('error')){
?>
toastr.error('{{ Session::get("error") }}');
<?php
    Session::forget('error');
}
?>
<?php
if(Session::has('success')){
?>
toastr.success('{{ Session::get("success") }}');
<?php
    Session::forget('success');
}
?>
</script> 