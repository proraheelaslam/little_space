@extends('frontend.layouts.app')
@section('content')

<section class="fullheight">
      <div class="stepcol3 {{ request()->type == 'bikeservice' ? 'stepcol4' : '' }}   h-100">
        <input type="hidden" id="verificationBangCode" />
        <input type="hidden" id="requestBangId" value="{{ request()->bang_id }}" />
        <input type="hidden" id="requestBangType" value="{{ request()->type }}" />
        <div class="container h-100">
          <div class="d-flex flex-column flex-md-row justify-content-md-center align-items-md-center h-100">
            <div class="col-lg-6 px-4 px-md-3">
              <div class="d-block d-md-none text-center">
                <h3>ACTIVATE YOUR HOME’S</h3>
                <h4 class="mb-4 text-uppercase">{{ request()->type == 'bikeservice' ? 'BIKE SERVICE' : 'TRADESPERSON' }}  Bang!</h4>
              </div>
              <img src="{{asset('frontend/images/img7.png')}}" class="bnrimg fisrtimg" alt="" />
              <img src="{{asset('frontend/images/img8.png')}}" class="bnrimg secimg" alt="" />
            </div>
            <div class="col-lg-6 text-center px-4 px-md-3 mt-5 mt-md-0">
              <div class="pb-4 d-none d-md-block">
                <h3>ACTIVATE YOUR HOME’S</h3>
                <h4 class="mb-4 text-uppercase">{{ request()->type == 'bikeservice' ? 'BIKE SERVICE' : 'TRADESPERSON' }} Bang!</h4>
              </div>
              <h5 class="mb-0">Enter your BANG!'S ID</h5>
              <div class="d-flex justify-content-between align-items-center py-4 my-md-4 verification-bang--inputs">
                <input type="number" maxlength="1" class="numbersOnlyOne" />
                <input type="number" maxlength="1" class="numbersOnlyOne" />
                <input type="number" maxlength="1" class="numbersOnlyOne" />
                <input type="number" maxlength="1" class="numbersOnlyOne" />
                <input type="number" maxlength="1" class="numbersOnlyOne" />
              </div>
            
              <div class="">
                <button class="btnLink border-0 activate_bang_button disabled_button">Activate</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection
@section('script')
@endsection