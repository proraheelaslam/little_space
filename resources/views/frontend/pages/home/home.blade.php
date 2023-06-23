@extends('frontend.layouts.app')
@section('content')

<section>
  <input type="hidden" value="" class="bang_type" />
  <input type="hidden" value="" class="postal_code" />
  <input type="hidden" value="" class="latitude" />
  <input type="hidden" value="" class="longitude" />

  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <header class="header pt-14 bg-primary">
        <nav class="navbar navbar-expand-lg p-0">
          <div class="container align-items-start">
            <a class="navbar-brand p-0" href="#">
              <img src="{{asset('frontend/images/logo-header-1.png')}}" height="48" width="auto" alt="" />
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 16H28" stroke="black" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 8H28" stroke="black" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 24H28" stroke="black" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>            
            </button>
            <div class="collapse navbar-collapse pt-3" id="navbarTogglerDemo03">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="p-0 nav-link text-white fs-18 lh-21 fw-medium" aria-current="page" href="#">About Sp_ACES?</a>
                </li>
                <li class="nav-item">
                  <a class="p-0 nav-link text-white fs-18 lh-21 fw-medium" href="#">Get your Sp_ACE</a>
                </li>
              </ul>
            </div> -->
          </div>
        </nav>
      </header>
      <section>
        <div class="MdlSec1 w-100 d-flex justify-content-center align-items-center">
          <h5>Just launched in London and Birmingham. More locations coming soon! </h5>
        </div>
        <div class="MainArea w-100">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h2>BANG!S HAVE ARRIVED</h2>
                <p>Need a plumber? Or maybe<br> your bike needs a service. Well, quite simply the first price you should
                  check is your home’s 2023 BANG! price</p>
              </div>
              <div class="col-lg-6 p-0">
                <img src="{{asset('frontend/images/img7.png')}}" class="w-100 bnrimg ml-2" alt="" />
              </div>
              <div class="col-lg-12 text-center py-5 my-5 customtop">
                <h2>WHAT’S A BANG!</h2>
                <p>Good question. A BANG! is an exclusive price for your home. You<br> get one BANG! in each category
                  every year and it can be used by<br> your or anyone you live with.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="MainArea2 text-center">
          <div class="container">
            <h2>The 2023 BANGS</h2>
            <p>BANGS! are available in some in some parts of<br> London and Manchester. More locations and<br> BANG!
              categories coming soon</p>
          </div>
        </div>
        <div class="stepcol">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="d-block d-md-none text-center">
                  <h3>YOUR HOME’S 2023</h3>
                  <h4>TRADESPERSON BANG!</h4>
                </div>
                <img src="{{asset('frontend/images/img7.png')}}" class="w-100 bnrimg ml-2" alt="" />
              </div>
              <div class="col-lg-6 ps-6 ps-md-5">
                <div class="d-none d-md-block">
                  <h3>YOUR HOME’S 2023</h3>
                  <h4>TRADESPERSON BANG!</h4>
                </div>
                <h5>Need a tradesperson ?</h5>
                <p>Use you home’s annual Tradesperson BANG<br> BANG! for 2023 and SAVE!</p>
                <div class="accordion banner d-block d-md-none mb-4" id="accordionExample">
                  <div class="accordion-item bg-transparent">
                    <h3 class="accordion-header text-white" id="headingOne1">
                      <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true"
                        aria-controls="collapseOne1">
                      </button>
                    </h3>
                    <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body text-white p-0">
                        <ul>
                          <li>Your home gets 1 Tradesperson BANG! a year</li>
                          <li>Jobs completed by local experts</li>
                          <li>SAVE MONEY!</li>
                          <li>Transparent prices</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="d-none d-md-block">
                  <li>Your home gets 1 Tradesperson BANG! a year</li>
                  <li>Jobs completed by local experts</li>
                  <li>SAVE MONEY!</li>
                  <li>Transparent prices</li>
                </ul>
                <div class="nav MultiTab justify-content-start mblcenter" id="nav-tab" role="tablist">
                  <button class="btnLink border-0 get_home_bang" data-type="tradesperson" id="na-home-tab"
                    data-bs-toggle="tab" data-bs-target="#na-home" type="button" role="tab" aria-controls="na-home"
                    aria-selected="false">GET YOUR HOME’S BANG!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="stepcol stepcol2">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 ps-6 ps-md-5">
                <div class="d-none d-md-block">
                  <h3>YOUR HOME’S 2023</h3>
                  <h4>Bike Service BANG! </h4>
                </div>
                <h5>Need a bike service ?</h5>
                <p>Use you home’s annual Bike Service <br>BANG! for 2023 and SAVE!</p>
                <div class="accordion banner1 d-block d-md-none mb-4" id="accordionExample">
                  <div class="accordion-item bg-transparent">
                    <h3 class="accordion-header text-white" id="headingOne2">
                      <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed"
                        type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true"
                        aria-controls="collapseOne2">
                      </button>
                    </h3>
                    <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2"
                      data-bs-parent="#accordionExample">
                      <div class="accordion-body  p-0">
                        <ul>
                          <li>Your home gets 1 Tradesperson BANG! a year</li>
                          <li>Jobs completed by local experts</li>
                          <li>SAVE MONEY!</li>
                          <li>Transparent prices</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="d-none d-md-block">
                  <li>Your home gets 1 Tradesperson BANG! a year</li>
                  <li>Jobs completed by local experts</li>
                  <li>SAVE MONEY!</li>
                  <li>Transparent prices</li>
                </ul>
                <div class="nav MultiTab justify-content-start mblcenter" id="nav-tab" role="tablist">
                  <button class="btnLink border-0 get_home_bang" data-type="bikeservice" id="na-home-tab"
                    data-bs-toggle="tab" data-bs-target="#na-home" type="button" role="tab" aria-controls="na-home"
                    aria-selected="false">GET YOUR HOME’S BANG!</button>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="d-block d-md-none text-center">
                  <h3>YOUR HOME’S 2023</h3>
                  <h4>Bike Service<br class="d-block"> BANG! </h4>
                </div>
                <img src="{{asset('frontend/images/img8.png')}}" class="w-100 bnrimg ml-2" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="worksec">
          <div class="container">
            <h2>How it works ?</h2>
            <p>It’s expensive out there, right? Fear not, your home has 1 BANG a year in each<br> category and
              guarantees you an exclusive price. Here’s how it works.</p>
            <div class="row pt-5 mt-5">
              <div class="col-lg-4">
                <div class="workinner">
                  <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('frontend/images/img9.png')}}" alt="" />
                    <h3 class="m-0">Unlock</h3>
                  </div>
                  <p>Select the BANG! type, enter your postcode and find your home</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="workinner">
                  <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('frontend/images/img9.png')}}" alt="" />
                    <h3 class="m-0">Email</h3>
                  </div>
                  <p>Enter your email and you’ll receive your unique BANG! code shortly after</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="workinner">
                  <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('frontend/images/img9.png')}} " alt="" />
                    <h3 class="m-0">Book</h3>
                  </div>
                  <p>Follow the instructions to book a quote from your home’s team of experts</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="tab-pane fade show active" id="na-home" role="tabpanel" aria-labelledby="na-home-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex justify-content-between align-items-center px-3 px-md-0">
            <a href="#" class="mb-md-4 back_home_page">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="black" stroke-width="6.66667" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </a>
            <h5 class="d-block d-md-none">Find your address</h5>
            <div class="d-block d-md-none">
              <img src="{{asset('frontend/images/img4.png')}}" alt="" />
            </div>
          </div>
          <ul class="MultiTab justify-content-center mx-auto d-none d-md-flex mb-0">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z"
                  fill="currentColor" />
                <path
                  d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z"
                  fill="currentColor" />
              </svg>
              Find Address
            </li>
            <li>
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z"
                  fill="currentColor" />
              </svg>
              Enter Details
            </li>
            <li>
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z"
                  fill="currentColor" />
                <path
                  d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z"
                  fill="currentColor" />
              </svg>
              Confirmation
            </li>
          </ul>
        </div>
      </div>
      <div class="centerSec">
        <div class="BtmSec text-center d-none d-md-block">
          <img src="{{asset('frontend/images/logo-header-1.png')}}" class="logo-sec" height="83" width="auto" alt="" />
          <h4 class="text-dark mb-0 px-4">YOU’RE ABOUT TO BANG!</h4>
        </div>
        <div class="col-12 p-0 d-flex justify-content-between align-items-center d-md-none">
          <img class="pe-3" src="{{asset('frontend/images/img11.png')}}" width="150" alt="" />
          <p>You’re two steps away from receiving your home’s 2023 Bike services BANG!</p>
        </div>
      </div>
      <div class="LastSec bg-primary">
        <div class="container">
          <div class="row mx-0 bg-draft">
            <div class="col-lg-5 col-12 px-0">
              <div class="w-100">
                <h4 class="text-dark">Let’s Find Your Home:</h4>
              </div>
              <form>
                <div class="position-relative">
                  <input type="text" id="txt_search" name="search_address" class="form-select1 form-select "
                    placeholder="Find address" />
                    <button class="position-absolute bg-transparent border-0" style="top: 9px;right:7px;" type="button" id="btn_search">
                      Search
                  </button>
                </div>
                <label style="display: none" htmlFor="txt_search"></label>
               
                <div id="address_selection_container" class="selectinput"></div>
                <div id="no_result_message">
                    Address not found, please enter manually.
                </div>
              
                <div class="post_sec_prop" style="display: none">
                  <label htmlFor="txt_country">Country</label>
                  <select id="txt_country">
                    <option value="UK">UK</option>
                  </select>
                <label htmlFor="txt_organsation">Organisation</label>
                  <input type="text" id="txt_organsation" />
                <label htmlFor="txt_addressline1">Address</label>
                  <input type="text" id="txt_addressline1" />
                  <input type="text" id="txt_addressline2" />
                  <input type="text" id="txt_addressline3" />
                <label htmlFor="txt_posttown">Town</label>
                  <input type="text" id="txt_posttown" />
                <label htmlFor="txt_postcode">Postcode</label>
                  <input type="text" id="txt_postcode" />
             
                </div>
                <div class="textareaSec position-relative">
                  <div class="d-flex">
                    <img src="{{asset('frontend/images/img10.png')}}" alt="" width="35" height="35"
                      class="position-absolute top-0 end-0 checkbtn" />
                    <div class="w-100">
                      <h3 class=""><b>You Live At:</b> <br><small class="search_address_text"></small></h3>
                      <h6 class=""></h6>

                    </div>
                  </div>
                </div>
                <div class="nav MultiTab justify-content-center mx-auto" id="nav-tab" role="tablist">
                  <button class="form-btn border-0 w-100 mb-4 address_step_tab_button" id="nav-profile-tab"
                    data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Next
                    Step</button>

                </div>
              </form>
              </form>
            </div>
            <div class="col-lg-7 d-none d-md-flex flex-column">
              <img class="bang_type_image" src="{{asset('frontend/images/img11.png')}}" class="w-100" alt="" />
              <div class="w-75 ms-auto">
                <h5 class="m-0 text-dark">You’re two steps away from receiving your <bR>home’s 2023 Bike services BANG!
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex justify-content-between align-items-center px-3 px-md-0">
            <a href="#" class="mb-md-4">
            <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="black" stroke-width="6.66667" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </a>
            <h5 class="d-block d-md-none">Your details</h5>
            <div class="d-block d-md-none">
              <img src="{{asset('frontend/images/img5.png')}}" alt="" />
            </div>
          </div>
          <ul class="MultiTab justify-content-center mx-auto d-none d-md-flex">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z"
                  fill="currentColor" />
                <path
                  d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z"
                  fill="currentColor" />
              </svg>
              Find Address
            </li>
            <li class="active">
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z"
                  fill="currentColor" />
              </svg>
              Enter Details
            </li>
            <li>
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z"
                  fill="currentColor" />
                <path
                  d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z"
                  fill="currentColor" />
              </svg>
              Confirmation
            </li>
          </ul>
        </div>
        <div class="centerSec">
          <div class="BtmSec text-center d-none d-md-block">
            <img src="{{asset('frontend/images/logo-header-1.png')}}" class="logo-sec" height="83" width="auto" alt="" />
            <h4 class="text-dark mb-0 px-4">YOU’RE ABOUT TO BANG!</h4>
          </div>
          <div class="col-12 p-0 d-flex justify-content-between align-items-center d-md-none">
            <img class="pe-3" src="{{asset('frontend/images/img11.png')}}" width="150" alt="" />
            <p>You’re two steps away from receiving your home’s 2023 Bike services BANG!</p>
          </div>
        </div>
      </div>
      <div class="LastSec bg-primary">
        <div class="container">
          <div class="row mx-0 bg-draft pb-5">
            <div class="col-lg-6 col-12 px-0">
              {{-- <img class="address_map_2" src="{{asset('frontend/images/img12.png')}}" class="w-100 mb-4 mt-0" height="370" alt="" /> --}}
              <div id='address_map_2' class="mx-auto mapimg" style='width: 540px; height: 316px;'></div>
              <h6>Tradesperson BANGS! are available at 15 Smith Street London W2 4EB</h6>
            </div>
            <div class="col-lg-6 d-none d-md-flex flex-column mb-4">
              <img class="bang_type_image" src="{{asset('frontend/images/img11.png')}}" class="w-100" alt="" />
              <div class="w-75 ms-auto">
                <h4>You Live Here</h4>
                <div class="inner-sec d-flex flex-column">
                  <h3>15 Smith Street , London W2 4EB</h3>
                  <a href="">Change</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="LastSec top-border bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4>Your Info:</h4>
              <div class="w-210 position-relative">
                <svg width="26" height="22" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M30.4516 26.2962C28.2677 22.6139 24.9022 19.9735 20.9745 18.7218C22.9173 17.5938 24.4267 15.875 25.271 13.8294C26.1152 11.7838 26.2477 9.52447 25.6479 7.39835C25.0481 5.27224 23.7494 3.39692 21.951 2.06038C20.1527 0.723848 17.9542 0 15.6932 0C13.4323 0 11.2338 0.723848 9.43546 2.06038C7.63712 3.39692 6.33834 5.27224 5.73858 7.39835C5.13882 9.52447 5.27123 11.7838 6.11549 13.8294C6.95975 15.875 8.46917 17.5938 10.412 18.7218C6.48432 19.9721 3.11881 22.6125 0.934885 26.2962C0.854796 26.4236 0.801674 26.5653 0.778653 26.713C0.755631 26.8607 0.763177 27.0115 0.800844 27.1563C0.838511 27.3011 0.905537 27.4371 0.997968 27.5562C1.0904 27.6754 1.20636 27.7753 1.33901 27.85C1.47166 27.9247 1.61832 27.9728 1.77032 27.9913C1.92233 28.0099 2.0766 27.9986 2.22405 27.958C2.37149 27.9175 2.50912 27.8486 2.62881 27.7553C2.7485 27.6621 2.84782 27.5464 2.92092 27.4151C5.62251 22.8615 10.3976 20.1427 15.6932 20.1427C20.9889 20.1427 25.764 22.8615 28.4656 27.4151C28.5387 27.5464 28.638 27.6621 28.7577 27.7553C28.8774 27.8486 29.015 27.9175 29.1624 27.958C29.3099 27.9986 29.4641 28.0099 29.6162 27.9913C29.7682 27.9728 29.9148 27.9247 30.0475 27.85C30.1801 27.7753 30.2961 27.6754 30.3885 27.5562C30.4809 27.4371 30.548 27.3011 30.5856 27.1563C30.6233 27.0115 30.6308 26.8607 30.6078 26.713C30.5848 26.5653 30.5317 26.4236 30.4516 26.2962ZM7.66304 10.0733C7.66304 8.52427 8.134 7.01007 9.01637 5.72214C9.89874 4.43421 11.1529 3.43039 12.6202 2.83762C14.0875 2.24485 15.7021 2.08975 17.2599 2.39195C18.8176 2.69414 20.2484 3.44004 21.3714 4.53534C22.4945 5.63063 23.2593 7.02613 23.5691 8.54535C23.879 10.0646 23.72 11.6393 23.1122 13.0703C22.5044 14.5014 21.4751 15.7246 20.1546 16.5851C18.834 17.4457 17.2815 17.905 15.6932 17.905C13.5642 17.9028 11.523 17.077 10.0175 15.6087C8.51209 14.1404 7.66532 12.1497 7.66304 10.0733Z" fill="black"/>
                </svg>
                <input type="text" class="form-select1 form-select first_name" placeholder="First Name" />
                <img src="{{asset('frontend/images/img10.png')}}" alt="" width="35" height="35" class="position-absolute top-0 end-0">
              </div>
            </div>
            <div class="col-md-6">
              <h4 style="opacity:0;">name</h4>
              <div class="w-210 position-relative">
                <svg width="26" height="22" viewBox="0 0 31 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M30.4516 26.2962C28.2677 22.6139 24.9022 19.9735 20.9745 18.7218C22.9173 17.5938 24.4267 15.875 25.271 13.8294C26.1152 11.7838 26.2477 9.52447 25.6479 7.39835C25.0481 5.27224 23.7494 3.39692 21.951 2.06038C20.1527 0.723848 17.9542 0 15.6932 0C13.4323 0 11.2338 0.723848 9.43546 2.06038C7.63712 3.39692 6.33834 5.27224 5.73858 7.39835C5.13882 9.52447 5.27123 11.7838 6.11549 13.8294C6.95975 15.875 8.46917 17.5938 10.412 18.7218C6.48432 19.9721 3.11881 22.6125 0.934885 26.2962C0.854796 26.4236 0.801674 26.5653 0.778653 26.713C0.755631 26.8607 0.763177 27.0115 0.800844 27.1563C0.838511 27.3011 0.905537 27.4371 0.997968 27.5562C1.0904 27.6754 1.20636 27.7753 1.33901 27.85C1.47166 27.9247 1.61832 27.9728 1.77032 27.9913C1.92233 28.0099 2.0766 27.9986 2.22405 27.958C2.37149 27.9175 2.50912 27.8486 2.62881 27.7553C2.7485 27.6621 2.84782 27.5464 2.92092 27.4151C5.62251 22.8615 10.3976 20.1427 15.6932 20.1427C20.9889 20.1427 25.764 22.8615 28.4656 27.4151C28.5387 27.5464 28.638 27.6621 28.7577 27.7553C28.8774 27.8486 29.015 27.9175 29.1624 27.958C29.3099 27.9986 29.4641 28.0099 29.6162 27.9913C29.7682 27.9728 29.9148 27.9247 30.0475 27.85C30.1801 27.7753 30.2961 27.6754 30.3885 27.5562C30.4809 27.4371 30.548 27.3011 30.5856 27.1563C30.6233 27.0115 30.6308 26.8607 30.6078 26.713C30.5848 26.5653 30.5317 26.4236 30.4516 26.2962ZM7.66304 10.0733C7.66304 8.52427 8.134 7.01007 9.01637 5.72214C9.89874 4.43421 11.1529 3.43039 12.6202 2.83762C14.0875 2.24485 15.7021 2.08975 17.2599 2.39195C18.8176 2.69414 20.2484 3.44004 21.3714 4.53534C22.4945 5.63063 23.2593 7.02613 23.5691 8.54535C23.879 10.0646 23.72 11.6393 23.1122 13.0703C22.5044 14.5014 21.4751 15.7246 20.1546 16.5851C18.834 17.4457 17.2815 17.905 15.6932 17.905C13.5642 17.9028 11.523 17.077 10.0175 15.6087C8.51209 14.1404 7.66532 12.1497 7.66304 10.0733Z" fill="black"/>
                </svg>
                <input type="text" class="form-select1 form-select last_name" placeholder="Last Name" />
                <img src="{{asset('frontend/images/img10.png')}}" alt="" width="35" height="35" class="position-absolute top-0 end-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="LastSec top-border bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-2">Your Mobile Number:</h4>
              <p>We’ll text your home’s bike service BANG! ID</p>
              <div class="w-210 position-relative">
                <svg width="23" height="24" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.3889 20.8655C25.4556 20.8655 23.3611 20.5432 21.5889 19.8988H21.1056C20.6222 19.8988 20.3 20.0599 19.9778 20.3821L16.4333 23.9266C11.9222 21.5099 8.05556 17.8043 5.8 13.2932L9.34445 9.74879C9.82778 9.26545 9.98889 8.62101 9.66667 8.13767C9.18333 6.36545 8.86111 4.27101 8.86111 2.33767C8.86111 1.53212 8.05556 0.726562 7.25 0.726562H1.61111C0.805556 0.726562 0 1.53212 0 2.33767C0 17.4821 12.2444 29.7266 27.3889 29.7266C28.1944 29.7266 29 28.921 29 28.1155V22.4766C29 21.671 28.1944 20.8655 27.3889 20.8655ZM3.22222 3.94878H5.63889C5.8 5.39878 6.12222 6.84878 6.44444 8.13767L4.51111 10.071C3.86667 8.13767 3.38333 6.04323 3.22222 3.94878ZM25.7778 26.5043C23.6833 26.3432 21.5889 25.8599 19.6556 25.2155L21.5889 23.2821C22.8778 23.6043 24.3278 23.9266 25.7778 23.9266V26.5043Z" fill="black"/>
                </svg>
                <input type="text" class="form-select1 form-select user_mobile_number " placeholder="Enter Your Mobile Number" />
                <img src="{{asset('frontend/images/img10.png')}}" alt="" width="35" height="35" class="position-absolute top-0 end-0">
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
      <div class="LastSec top-border bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-2">Your Email Address:</h4>
              <p>We’ll email your BANG! ID and prices</p>
              <div class="w-210 position-relative">
                <svg width="28" height="18" viewBox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M31.5714 0H2.42857C1.78447 0 1.16676 0.252856 0.711312 0.702944C0.255866 1.15303 0 1.76348 0 2.4V21.6C0 22.2365 0.255866 22.847 0.711312 23.2971C1.16676 23.7471 1.78447 24 2.42857 24H31.5714C32.2155 24 32.8332 23.7471 33.2887 23.2971C33.7441 22.847 34 22.2365 34 21.6V2.4C34 1.76348 33.7441 1.15303 33.2887 0.702944C32.8332 0.252856 32.2155 0 31.5714 0ZM28.9 2.4L17 10.536L5.1 2.4H28.9ZM2.42857 21.6V3.492L16.3079 12.984C16.5111 13.1234 16.7526 13.198 17 13.198C17.2474 13.198 17.4889 13.1234 17.6921 12.984L31.5714 3.492V21.6H2.42857Z" fill="black"/>
                  </svg>
                <input type="text" class="form-select1 form-select user_email" placeholder="Enter Your Email" />
                <img src="{{asset('frontend/images/img10.png')}}" alt="" width="35" height="35" class="position-absolute top-0 end-0">
              </div>
            </div>
            <div class="col-md-6">
              <h4 style="opacity:0;">submit</h4>
              <div class="nav MultiTab justify-content-center mx-auto" id="nav-tab" role="tablist">
                  <button class="form-btn border-0 w-100 mb-4 user_profile_step_button w-210" id="nav-profile-tab"
                    data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Next
                    Step</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
       <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex justify-content-between align-items-center px-3 px-md-0">
            <a href="#" class="mb-md-4">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="black" stroke-width="6.66667" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </a>
            <h5 class="d-block d-md-none">Your details</h5>
            <div class="d-block d-md-none">
              <img src="{{asset('frontend/images/img5.png')}}" alt="" />
            </div>
          </div>
          <ul class="MultiTab justify-content-center mx-auto d-none d-md-flex">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z"
                  fill="currentColor" />
                <path
                  d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z"
                  fill="currentColor" />
              </svg>
              Find Address
            </li>
            <li class="active">
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z"
                  fill="currentColor" />
                <path
                  d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z"
                  fill="currentColor" />
                <path
                  d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z"
                  fill="currentColor" />
              </svg>
              Enter Details
            </li>
            <li class="active">
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z"
                  fill="currentColor" />
                <path
                  d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z"
                  fill="currentColor" />
              </svg>
              Confirmation
            </li>
          </ul>
        </div>
        <div class="centerSec pt-0">
          <div class="BtmSec text-center d-none d-md-block">
            <img src="{{asset('frontend/images/logo-header-1.png')}}" class="logo-sec" height="83" width="auto" alt="" />
            <h4 class="text-dark mb-0 px-4">Your BANG! is on it’s way</h4>
          </div>
        </div>
      </div>
      <div class="LastSec bg-primary pt-0">
        <div class="container">
          <div class="row mx-0 bg-draft pb-5 justify-content-center">
            <div class="col-lg-6 col-12 px-0 mb-2">
              {{-- <img class="address_map_1" src="{{asset('frontend/images/img12.png')}}" class="w-100 mb-4 mt-0" height="370" alt="" /> --}}
              <div id='address_map_1' class="mx-auto mapimg" style='width: 540px; height: 316px;'></div>
              <h6 class="mb-5">Tradesperson BANGS! are available at 15 Smith Street London W2 4EB</h6>
              <div class="nav MultiTab justify-content-center mx-auto" id="nav-tab" role="tablist">
                  <button class="form-btn border-0 w-100 mb-4 address_step_tab_button" id="nav-profile-tab"
                    data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Get my BANG</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="Faqs px-5">
    <div class="container-fluid">
      <h2>Frequently Asked Questions</h2>
      <p>Lorem Ipsum is simply dummy text of the printing and<br> typesetting industry.</p>
      <div class="row">
        <div class="col-md-6">
          <h3>What’s a Tradesperson BANG! ?</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and<br> typesetting industry.</p>
          <h3>How many BANG!S does my home have?</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and<br> typesetting industry.</p>
        </div>
        <div class="col-md-6">
          <h3>Who does the work?</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and<br> typesetting industry.</p>
          <h3>Can I get another BANG! ?</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and<br> typesetting industry.</p>
        </div>
      </div>
    </div>
  </div>
</section>









@endsection
@section('script')
@endsection