@extends('frontend.layouts.app')
@section('content')

<section class="main_inner_section">
  <input type="hidden" value="" class="bang_type" />
  <input type="hidden" value="" class="postal_code" />
  <input type="hidden" value="" class="latitude" />
  <input type="hidden" value="" class="longitude" />
  <input type="hidden" value="" id="latlang" />
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                <p>Need a plumber? Or maybe<br> your bike needs a service. Well, quite simply the first price you should check is your home’s 2023 BANG! price</p>
              </div>
              <div class="col-lg-6 p-0">
                <img src="{{asset('frontend/images/img7.png')}}" class="w-100 bnrimg ml-2" alt="" />
              </div>
              <div class="col-lg-12 text-center py-5 my-5 customtop">
                <h2>WHAT’S A BANG!</h2>
                <p>Good question. A BANG! is an exclusive price for your home. You<br> get one BANG! in each category every year and it can be used by<br> your or anyone you live with.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="MainArea2 text-center">
          <div class="container">
            <h2>The 2023 BANGS</h2>
            <p>BANGS! are available in some in some parts of<br> London and Manchester. More locations and<br> BANG! categories coming soon</p>
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
                      <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                      </button>
                    </h3>
                    <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne1" data-bs-parent="#accordionExample">
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
                  <button class="btnLink border-0 get_home_bang" data-type="tradesperson" id="na-home-tab" data-bs-toggle="tab" data-bs-target="#na-home" type="button" role="tab" aria-controls="na-home" aria-selected="false">GET YOUR HOME’S BANG!</button>
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
                      <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                      </button>
                    </h3>
                    <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample">
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
                  <button class="btnLink border-0 get_home_bang" data-type="bikeservice" id="na-home-tab" data-bs-toggle="tab" data-bs-target="#na-home" type="button" role="tab" aria-controls="na-home" aria-selected="false">GET YOUR HOME’S BANG!</button>
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
            <p>It’s expensive out there, right? Fear not, your home has 1 BANG a year in each<br> category and guarantees you an exclusive price. Here’s how it works.</p>
            <div class="row pt-5 mt-5">
              <div class="col-lg-4">
                <div class="workinner">
                  <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('frontend/images/img9.png')}}" alt="" />
                    <h3  class="m-0">Unlock</h3>
                  </div>
                  <p>Select the BANG! type, enter your postcode and find your home</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="workinner">
                  <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('frontend/images/img9.png')}}" alt="" />
                    <h3  class="m-0">Email</h3>
                  </div>
                  <p>Enter your email and you’ll receive your unique BANG! code shortly after</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="workinner">
                  <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('frontend/images/img9.png')}} " alt="" />
                    <h3  class="m-0">Book</h3>
                  </div>
                  <p>Follow the instructions to book a quote from your home’s team of experts</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="tab-pane fade" id="na-home" role="tabpanel" aria-labelledby="na-home-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex justify-content-between align-items-center px-3 px-md-0">
            <a href="#" class="mb-md-4 back_home_page">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="white" stroke-width="6.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>            
            </a>
            <h5 class="d-block d-md-none">Find your address</h5>
            <div class="d-block d-md-none">
              <img src="{{asset('frontend/images/img4.png')}}" class="first"  alt="" />
              <img src="{{asset('frontend/images/img10.png')}}" class="secound" alt="" />
            </div>
          </div>
          <ul class="MultiTab justify-content-center mx-auto d-none d-md-flex">
            <li data-id="step_1" class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z" fill="currentColor"/>
                <path d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z" fill="currentColor"/>
              </svg>              
              Find Address              
            </li>
            <li data-id="step_2">
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z" fill="currentColor"/>
                <path d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z" fill="currentColor"/>
                <path d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z" fill="currentColor"/>
                <path d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z" fill="currentColor"/>
                <path d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z" fill="currentColor"/>
                <path d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z" fill="currentColor"/>
                <path d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z" fill="currentColor"/>
              </svg>              
              Enter Details
            </li>
            <li data-id="step_3">
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z" fill="currentColor"/>
                <path d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z" fill="currentColor"/>
              </svg>              
              Confirmation
            </li>
          </ul>
        </div>
        <div class="MdlSec d-flex justify-content-center align-items-center">
          <h5>You’re 2 steps away from getting your home’s exclusive <small style="font-size: 26px;" class="home_bang_type_text web_bang_type">tradesperson</small> price for 2023
          </h5>
        </div>
      </div>
      <div class="centerSec">
        <div class="BtmSec text-center">
          <img src="{{asset('frontend/images/logo-header-1.png')}}" class="logo-sec" height="83" width="auto" alt="" />
          <h4 class="text-white mb-0 px-4">YOU’RE ABOUT TO BANG!</h4>
          <h6 class="text-white">Get your home’s 2023 <small class="home_bang_type_text">tradesperson</small> BANG! price today and book with local BANG! Experts.</h6>
        </div>
      </div>
      <div class="LastSec bg-primary">
        <div class="container">
          <div class="row mx-0">
            <div class="col-lg-5">
              <img class="bang_type_image" src="{{asset('frontend/images/img1.png')}}" alt="" width="100%" />
              <div class="w-100 px-4">
                <h5 class="m-0 text-white sel_card_heading">So you need a plumber?<Br> No problem!</h5>
                <h6 class="text-white pe-2 sel_card_description">The first price you should check is your home’s BANG! Price. Start by finding your home.</h6>
              </div>
            </div>
            <div class="col-lg-12 d-block d-md-none faqs2">
              <div class="Faqs Faqs1 text-center px-4">
                  <h2 class="text-white">FAQS</h2>
                  <div class="accordion text-start mx-auto" id="accordionExample">
                    <div class="accordion-item bg-transparent">
                      <h3 class="accordion-header text-white" id="headingOne">
                        <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          What's a&nbsp;<small style="font-size: 15px;" class="home_bang_type_text_capital">Tradesperson</small>&nbsp;BANG! ?
                        </button>
                      </h3>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white p-0">
                          <p class="tradeperson_bike_step_acc_1">A BANG! is an an exclusive price for a local plumber, heating engineer or electrician. Don’t worry other trades are coming soon.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item bg-transparent">
                      <h3 class="accordion-header text-white" id="headingTwo">
                        <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          How many BANG!S does my home have?
                        </button>
                      </h3>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white p-0">
                          <p class="tradeperson_bike_step_acc_2">Each year we allocate your home with 1 tradesperson BANG! which can be used by you and the people you live with.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item bg-transparent">
                      <h3 class="accordion-header text-white" id="headingThree">
                        <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Who does the work?
                        </button>
                      </h3>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white p-0">
                          <p class="tradeperson_bike_step_acc_3">We only partner with local experts so not only do you get a great price you can be assured that the work is carried out by approved and reliable tradespeople.</p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item bg-transparent">
                      <h3 class="accordion-header text-white" id="headingFour">
                        <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                          Can I get another BANG! ?
                        </button>
                      </h3>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white p-0">
                          <p class="">Of course! Just add the BANG! onto your order so it's ready to use the next time you need an expert</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-7 search_address_section">
              <div class="w-100 text-center">
                <h4 class="text-white">FIND YOUR HOME </h4>
                <div class="Faqs bg-transparent p-0 faqtop">
                  <div class="accordion text-start mx-auto w-100 px-md-4" id="accordionExample">
                    <div class="accordion-item bg-transparent px-md-5 m-0">
                      <h3 class="accordion-header text-white" id="headingOne6">
                        <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                          Have BANG!S reached your home yet?
                        </button>
                      </h3>
                      <div id="collapseOne6" class="accordion-collapse collapse" aria-labelledby="headingOne6" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-white p-0">
                          <p>Just launched! BANG!S are currently available in London ( W2, NW8 and SW1 and Birmingham ( B3, B4 and B2 ).)</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <h5 class="text-white">Type a part of postcode or address</h5>
              </div>
              <form>
                <div>
                  {{-- <input type="text" name="search_address" class="form-select1 form-select search_address_input" id="search_box_input" placeholder="Find address"/> --}}
                  <div id="geocoder" class="geocoder w-100 shadow-0 form-select1 form-select search_address_input"></div>
                </div>
                <div class="textareaSec">
                  <div class="d-flex">
                    <img  src="{{asset('frontend/images/img2.png')}}" alt="" width="60" height="60" />
                    <div class="ms-6">
                      <h3>Location</h3>
                      <h6 class="search_address_text"></h6>
                    </div>
                  </div>
                </div>
                <div class="nav MultiTab justify-content-center mx-auto" id="nav-tab" role="tablist">
                  <button class="form-btn border-0 w-100 mb-4 address_step_tab_button" id="nav-profile-tab" data-bs-toggle="tab" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Next Step</button>
                </div>
                <h6 class="text-white">In the next step we’ll ask you for your email so we can send you your home’s BANG!</h6>
                </form>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex justify-content-between align-items-center px-3 px-md-0">
            <a href="#" class="mb-md-4 back_home_page">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="white" stroke-width="6.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>            
            </a>
            <h5 class="d-block d-md-none">Your details</h5>
            <div class="d-block d-md-none">
              <img src="{{asset('frontend/images/img5.png')}}"  class="first" alt="" />
              <img src="{{asset('frontend/images/img11.png')}}" class="secound" alt="" />
            </div>
          </div>
          <ul class="MultiTab justify-content-center mx-auto d-none d-md-flex">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z" fill="currentColor"/>
                <path d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z" fill="currentColor"/>
              </svg>              
              Find Address              
            </li>
            <li class="active">
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z" fill="currentColor"/>
                <path d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z" fill="currentColor"/>
                <path d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z" fill="currentColor"/>
                <path d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z" fill="currentColor"/>
                <path d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z" fill="currentColor"/>
                <path d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z" fill="currentColor"/>
                <path d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z" fill="currentColor"/>
              </svg>              
              Enter Details
            </li>
            <li>
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z" fill="currentColor"/>
                <path d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z" fill="currentColor"/>
              </svg>              
              Confirmation
            </li>
          </ul>
        </div>
        <div class="MdlSec d-flex justify-content-center align-items-center">
          <h5>If BANG!S are available where you live we’ll send your BANG! by email and SMS. </h5>
        </div>
      </div>
      <div class="centerSec">
        <div class="BtmSec text-center">
          <img src="{{asset('frontend/images/logo-header-1.png')}}" class="logo-sec" height="83" width="auto" alt="" />
          <h6 class="text-white px-5"> You’re requesting the <small class="home_bang_type_text_capital ">tradesperson</small> BANG! for</h6>
          <h5 class="text-white address_request_bang"> 15, Smith St, London, W12 2AD.</h5>
          {{-- <img src="{{asset('frontend/images/img3.png')}}" class="mapimg" height="375" width="auto" alt="" /> --}}
          <div id='address_map_1' class="mx-auto mapimg" style='width: 700px; height: 380px;'></div>
        </div>
      </div>
      <div class="LastSec2 bg-primary">
        <div class="container">
          <div class="row mx-0">
            <div class="col-lg-6 px-4 px-md-3">
              <h3>WHAT’S  NEXT?</h3>
              <ul class="m-0 p-0">
                <li class="d-flex justify-content-start align-items-center"><span class="d-flex justify-content-center align-items-center me-3">1</span> <b>Tell us your details</b></li>
                <li class="d-flex justify-content-start align-items-center"><span class="d-flex justify-content-center align-items-center me-3">2</span> <b>Receive your home’s BANG! by email and SMS</b></li>
                <li class="d-flex justify-content-start align-items-center"><span class="d-flex justify-content-center align-items-center me-3">3</span> <b>Find out your home’s 2023 price</b></li>
              </ul>
            </div>
            <div class="col-lg-6 formTabTwo">
              <h3>LET’S BANG!</h3>
              <div class="row text-start">
                <div class="col-lg-6 mb-6">
                  <input type="text" placeholder="First Name" class="first_name" />
                </div>
                <div class="col-lg-6 mb-6">
                  <input type="text" placeholder="Last Name" class="last_name" />
                </div>
                <div class="col-lg-12 mb-6">
                  <input type="text" placeholder="Enter email" class="user_email" />
                  <span class="mt-3 d-block">For safe keeping we’ll send your BANG! by email</span>
                </div>
                <div class="col-lg-12 mb-6">
                  <input type="number" placeholder="Enter mobile number" class="user_mobile_number" />
                  <span class="mt-3 d-block">We’ll send your BANG! ID by text too</span>
                </div>
                <div class="col-lg-12">
                  <div class="nav MultiTab justify-content-center mx-auto" id="nav-tab" role="tablist">
                    <button class="form-btn border-0 w-100 mb-4 user_profile_step_button" id="nav-contact-tab" data-bs-toggle="tab"   type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Get my BANG</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      <div class="TopSec">
        <div class="container">
          <div class="backlink w-100 d-flex justify-content-between align-items-center px-3 px-md-0">
            <a href="#" class="mb-md-4 back_home_page">
              <svg width="20" height="32" viewBox="0 0 20 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.25 28.5L3.75 16L16.25 3.5" stroke="white" stroke-width="6.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>            
            </a>
            <h5 class="d-block d-md-none">Confirmation</h5>
            <div class="d-block d-md-none">
              <img src="{{asset('frontend/images/img6.png')}}"  class="first" alt="" />
              <img src="{{asset('frontend/images/img12.png')}}" class="secound" alt="" />
            </div>
          </div>
          <ul class="MultiTab justify-content-center mx-auto d-none d-md-flex">
            <li class="active">
              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.6856 13.8601C17.8711 13.866 19.0103 13.4001 19.852 12.5654C20.6939 11.7304 21.1691 10.5953 21.1729 9.40953C21.1767 8.22401 20.709 7.0856 19.873 6.24521C19.0368 5.40489 17.9007 4.93147 16.7152 4.92969C15.5296 4.92764 14.392 5.39716 13.5529 6.23495C12.7139 7.07244 12.2426 8.20941 12.2426 9.39486C12.2415 10.5754 12.7087 11.7085 13.5414 12.5456C14.3743 13.3826 15.505 13.8552 16.6856 13.8601Z" fill="currentColor"/>
                <path d="M31.1305 19.5961C31.0842 19.338 30.9475 19.1047 30.7452 18.9379C30.5427 18.7714 30.2875 18.682 30.0252 18.6861H23.1213L24.5948 16.7078C26.1201 14.7136 26.883 12.2403 26.7463 9.73349C26.3816 4.2807 21.9236 0 16.5964 0C11.269 0 6.81091 4.28089 6.44644 9.73349C6.30561 12.2383 7.06347 14.7114 8.58327 16.7078L10.0568 18.6861H3.33317C3.07104 18.682 2.81585 18.7714 2.61337 18.9379C2.41087 19.1047 2.27415 19.338 2.22789 19.5961L0.0172448 31.846H0.0175018C-0.0410912 32.1713 0.0491114 32.5054 0.262928 32.7573C0.476999 33.0089 0.792326 33.1518 1.12253 33.1466H32.2539C32.5841 33.1518 32.8995 33.0089 33.1135 32.7573C33.3273 32.5054 33.4175 32.1714 33.3589 31.846L31.1305 19.5961ZM8.65692 9.88429C8.90389 6.11556 11.9433 2.21065 16.5963 2.21065C21.2494 2.21065 24.2891 6.11582 24.543 9.881C24.6455 11.8611 24.0383 13.8129 22.8299 15.3852L16.5964 23.7266L10.3626 15.3852C9.15455 13.8129 8.54699 11.8611 8.64955 9.881L8.65692 9.88429ZM2.44551 30.9467L4.25807 20.9072L11.7225 20.9075L15.7125 26.231C15.9211 26.5109 16.2496 26.6756 16.5986 26.6756C16.9476 26.6756 17.276 26.5109 17.4847 26.231L21.4783 20.8964H29.119L30.9316 30.947L2.44551 30.9467Z" fill="currentColor"/>
              </svg>              
              Find Address              
            </li>
            <li class="active">
              <svg width="31" height="35" viewBox="0 0 31 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5681 0H5.37878C2.39466 0 0 2.39459 0 5.37904V29.621C0 32.5684 2.39459 35 5.37904 35H25.6052C28.5526 35 30.9843 32.6054 30.9843 29.621L30.984 5.37904C30.947 2.39466 28.5524 0 25.5683 0H25.5681ZM27.889 29.6209C27.889 30.9105 26.8574 31.942 25.5679 31.942H5.37852C4.08892 31.942 3.05741 30.9104 3.05741 29.6209L3.05767 5.37891C3.05767 4.08932 4.08924 3.05781 5.37878 3.05781H25.605C26.8946 3.05781 27.9261 4.08938 27.9261 5.37891L27.9258 29.6209H27.889Z" fill="currentColor"/>
                <path d="M9.28493 8.62109H8.8059C7.95861 8.62109 7.25854 9.32116 7.25854 10.1685C7.25854 11.0157 7.95861 11.7158 8.8059 11.7158H9.28493C10.1322 11.7158 10.8323 11.0157 10.8323 10.1685C10.8323 9.32116 10.1322 8.62109 9.28493 8.62109Z" fill="currentColor"/>
                <path d="M9.28493 15.9526H8.8059C7.95861 15.9526 7.25854 16.6527 7.25854 17.5C7.25854 18.3473 7.95861 19.0474 8.8059 19.0474H9.28493C10.1322 19.0474 10.8323 18.3473 10.8323 17.5C10.8323 16.6527 10.1322 15.9526 9.28493 15.9526Z" fill="currentColor"/>
                <path d="M9.28493 23.2842H8.8059C7.95861 23.2842 7.25854 23.9842 7.25854 24.8315C7.25854 25.6788 7.95861 26.3789 8.8059 26.3789H9.28493C10.1322 26.3789 10.8323 25.6788 10.8323 24.8315C10.8323 23.984 10.1322 23.2842 9.28493 23.2842Z" fill="currentColor"/>
                <path d="M22.1792 8.62109H14.4424C13.5951 8.62109 12.8951 9.32116 12.8951 10.1685C12.8951 11.0157 13.5951 11.7158 14.4424 11.7158H22.1792C23.0265 11.7158 23.7266 11.0157 23.7266 10.1685C23.7266 9.32116 23.0265 8.62109 22.1792 8.62109Z" fill="currentColor"/>
                <path d="M22.1792 15.9526H14.4424C13.5951 15.9526 12.8951 16.6527 12.8951 17.5C12.8951 18.3473 13.5951 19.0474 14.4424 19.0474H22.1792C23.0265 19.0474 23.7266 18.3473 23.7266 17.5C23.7266 16.6527 23.0265 15.9526 22.1792 15.9526Z" fill="currentColor"/>
                <path d="M22.1792 23.2842H14.4424C13.5951 23.2842 12.8951 23.9842 12.8951 24.8315C12.8951 25.6788 13.5951 26.3789 14.4424 26.3789H22.1792C23.0265 26.3789 23.7266 25.6788 23.7266 24.8315C23.7266 23.984 23.0265 23.2842 22.1792 23.2842Z" fill="currentColor"/>
              </svg>              
              Enter Details
            </li>
            <li class="active">
              <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4265 11.0207L13.695 19.7522L9.75302 15.81C9.16349 15.2204 8.24244 15.2204 7.6529 15.81C7.06337 16.3995 7.06337 17.3206 7.6529 17.9101L12.6267 22.8839C12.9215 23.1786 13.2897 23.3259 13.6583 23.3259C14.0268 23.3259 14.395 23.1786 14.6898 22.8839L24.4529 13.1208C25.0425 12.5313 25.0425 11.6102 24.4529 11.0207C23.9372 10.4679 22.9794 10.4679 22.4268 11.0207H22.4265Z" fill="currentColor"/>
                <path d="M16.4592 0.742253C7.72767 0.742253 0.617188 7.85273 0.617188 16.5843C0.617188 25.3158 7.72767 32.4263 16.4592 32.4263C23.3855 32.4263 29.4644 28.0053 31.5644 21.4105C31.8224 20.6367 31.3801 19.7894 30.6065 19.5684C29.8327 19.3104 28.9854 19.7527 28.7644 20.5263C27.0329 25.8685 22.0961 29.4788 16.4593 29.4788C9.34878 29.4788 3.5646 23.6945 3.5646 16.5842C3.5646 9.47384 9.34891 3.68954 16.4593 3.68954C23.5696 3.68954 29.3539 9.47384 29.3539 16.5842C29.3539 17.3947 30.0169 18.0577 30.8275 18.0577C31.638 18.0577 32.301 17.3947 32.301 16.5842C32.3013 7.85267 25.1912 0.742188 16.459 0.742188L16.4592 0.742253Z" fill="currentColor"/>
              </svg>              
              Confirmation
            </li>
          </ul>
        </div>
        <div class="MdlSec d-flex justify-content-center align-items-center">
          <h5 class="banner_step_3_text">Your home's Tradesperson BANG! will arrive inside 24 hours!</h5>
        </div>
      </div>
      <div class="centerSec">
        <div class="BtmSec text-center">
          <img src="{{asset('frontend/images/logo-header-1.png')}}" height="83" width="auto" alt="" />
          {{-- <h4 class="text-white mb-5 px-4">Your BANG! is on it’s way </h4> --}}
          <h4 class="text-white mb-0 px-4">YOUR HOME’S 2023 <small style="font-size: 64px;" class="home_bang_type_text_3 mob_bang_type_step3">tradesperson</small> BANG! IS ON IT’S WAY</h4>
          <h6 class="text-white">We’ll text and email your home’s BANG! once we’ve checked it’s not been used this year and you live in an active postcode.</h6>
       
          {{-- <img src="{{asset('frontend/images/img3.png')}}" class="mapimg" height="375" width="auto" alt="" /> --}}
          <div id='address_map_2' class="mx-auto mapimg" style='width: 700px; height: 380px;'></div>
          <div class="w-100 pt-0 pt-md-5 mt-3">
            <button class="form-btn2 text-white border-0 finish_steps_button">FINISH</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="Faqs Faqs3 text-center">
    <div class="container">
      <h2 class="text-white">FAQS</h2>
      <div class="accordion text-start mx-auto" id="accordionExample">
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingOne">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             
              What’s a&nbsp;<small style="font-size: 29px;" class="home_bang_type_text_capital">TRADESPERSON</small>&nbsp;BANG!? 
            </button>
          </h3>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0 ">

              <p class="tradeperson_bike_step_acc_1">A BANG! is an an exclusive price for a local plumber, heating engineer or electrician. Don’t worry other trades are coming soon.</p>
            
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingTwo">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              How many BANG!S does my home have?
            </button>
          </h3>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0">
              <p class="tradeperson_bike_step_acc_2">Each year we allocate your home with 1 tradesperson BANG! which can be used by you and the people you live with.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingThree">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
              Who does the work?
            </button>
          </h3>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0">
              <p class="tradeperson_bike_step_acc_3">We only partner with local experts so not only do you get a great price you can be assured that the work is carried out by approved and reliable tradespeople.</p>
            </div>
          </div>
        </div>
        <div class="accordion-item bg-transparent">
          <h3 class="accordion-header text-white" id="headingFour">
            <button class="accordion-button text-uppercase text-white bg-transparent p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
              Can I get another BANG! ?
            </button>
          </h3>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body text-white p-0">
              <p>Of course! Just add the BANG! onto your order so it’s ready to use the next time you need an expert</p>
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