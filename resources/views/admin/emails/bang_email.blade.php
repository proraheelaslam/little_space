<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link href="https://fonts.googleapis.com/css?family=DM Sans" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet" header />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <style>
        * {
            margin: 0;
            padding: 0
        }

        html {
            background: #fffcf3
        }

        .footer {
            background: linear-gradient(180deg, #413636 0, #1b1717 76.91%, #000 100%);
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            font-weight: 300;
            line-height: 1.5
        }

        @media screen and (max-width:768px) {
            .header {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background: #fedd00
            }

            .header__logo {
                height: 70px;
                width: 60px;
                margin-top: 140px;
                margin-bottom: 35px
            }

            .header__card-container {
                flex-direction: column;
                display: flex;
                height: 100%;
                width: 100%
            }

            .header__card-container-title {
                position: absolute;
                top: 0;
                color: #000;
                font-family: Poppins, sans-serif;
                font-weight: 600;
                font-size: 22px;
                line-height: 30px;
                margin: 20px auto 0;
                width: 90%;
                left: 50%;
                transform: translateX(-50%);
                text-align: left;
                display: flex;
                justify-content: center;
                align-items: center
            }

            .main__section-1__div-1,
            .main__section-1__div-2 .w-box {
                font-size: 16px;
                font-weight: 500;
                font-family: Poppins, sans-serif
            }

            .header__card-container__card {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                margin: 0 auto 35px
            }

            .header__card-container__card img {
                max-width: 310px;
                max-height: 205px;
                border-radius: 14px;
                background: linear-gradient(112deg, #2e2e2e 6%, #000 64%, #000 104%);
                width: 85%
            }

            .main__section-1 {
                padding-bottom: 50px;
                background: #da3631
            }

            .main__section-1__div-1 {
                transform: scale(1.2);
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                color: #fff
            }

            .main__section-1__div-1 span {
                margin-top: 30px;
                margin-bottom: 20px;
                width: 57%;
                line-height: 23px;
                text-align: center;
                transform: scale(1.2)
            }

            .main__section-1__div-2 {
                gap: 15px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
                transform: scale(1.2);
                padding-top: 10px;
                padding-bottom: 10px
            }

            .main__section-1__div-2 .w-box,
            .main__section-1__div-3 {
                transform: scale(1.2);
                justify-content: center;
                display: flex
            }

            .main__section-1__div-2 .w-box {
                align-items: center;
                flex-direction: row;
                background: #fff;
                line-height: 23px;
                height: 28px;
                width: 28px;
                border-radius: 6px
            }

            .main__section-1__div-3 {
                align-items: center;
                flex-direction: row;
                margin: 15px auto 30px;
                height: 6px;
                border-radius: 30px;
                width: 80px;
                background: #fedd00
            }

            .main__section-1__div-4 {
                width: 85%;
                height: 100px;
                margin: 0 auto;
                border-radius: 12px;
                background-color: #fedd00;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column
            }

            .main__section-1__div-4 .mes {
                font-family: Poppins, sans-serif;
                font-weight: 500;
                font-size: 18px
            }

            .main__section-1__div-4 .mobile-no {
                font-size: 28px;
                font-family: Poppins, sans-serif;
                padding-top: 10px
            }

            .main__section-2 {
                background: #000;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column
            }

            .main__section-2 .w-box {
                background: #fff;
                height: 45px;
                width: 45px;
                border-radius: 6px;
                margin-right: 20px;
                font-weight: 600;
                color: #000;
                text-align: center;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 25px
            }

            .main__section-2__div-1 {
                color: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding-bottom: 40px;
                padding-top: 20px;
                width: 80%
            }

            .main__section-2__div-1 .title {
                font-family: Kievit, sans-serif;
                font-size: 36px;
                padding-bottom: 10px;
                text-transform: uppercase
            }

            .main__section-2__div-1 .des {
                width: 100%;
                text-align: center;
                font-family: Poppins, sans-serif;
                font-size: 16px;
                line-height: 24px;
                font-weight: 500
            }

            .main__section-2 .yellow-sets {
                margin-bottom: 50px
            }

            .main__section-2 .yellow-sets .y-box {
                background: #fedd00;
                border-radius: 14px;
                margin-bottom: 10px;
                font-family: "DM Sans", sans-serif;
                font-weight: 500;
                display: flex;
                justify-content: center;
                flex-direction: column;
                padding: 20px
            }

            .main__section-2 .yellow-sets .y-box .title-card {
                display: flex;
                flex-direction: row;
                align-items: center;
                margin-bottom: 15px
            }

            .main__section-2 .yellow-sets .y-box .title-card .title {
                font-weight: 600;
                font-family: "DM Sans", sans-serif;
                font-size: 30px
            }

            .main__section-2 .yellow-sets .y-box .des-card {
                display: flex;
                line-height: 30px;
                font-family: "DM Sans", sans-serif;
                font-size: 20px;
                font-weight: 500;
                width: 290px;
                height: 90px;
                color: #7f7751;
                text-align: left
            }

            .pc {
                display: none
            }
        }

        @media screen and (min-width:768.1px) {
            html {
                background: #fffcf3;
                width: 100%
            }

            .footer {
                font-size: 18px
            }

            .header {
                display: flex;
                flex-direction: column;
                background: #fedd00;
                padding-bottom: 65px;
                box-sizing: border-box
            }

            .header__logo {
                height: 70px;
                width: 60px;
                margin: 65px auto 80px
            }

            .header__card-container {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: space-around
            }

            .header__card-container__des-title {
                color: #000;
                font-family: Poppins, sans-serif;
                font-weight: 500;
                font-size: 48px;
                width: 650px
            }

            .header__card-container__des-btn {
                background: #da3631;
                height: 65px;
                width: 325px;
                outline: 0;
                border: none;
                color: #fff;
                font-size: 20px;
                font-family: Poppins, sans-serif;
                margin-top: 55px;
                box-shadow: 0 4px 4px rgba(0, 0, 0, .473)
            }

            .header__card-container__card img {
                width: 600px;
                height: 400px;
                border-radius: 27px;
                background: linear-gradient(112deg, #2e2e2e 6%, #000 64%, #000 104%);
                box-shadow: 0 0 20px 10px rgba(0, 0, 0, .526)
            }

            .main__section-1 {
                height: 530px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background: #da3631
            }

            .main__section-1__div-1 {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                width: 100%;
                font-size: 16px;
                font-family: Poppins, sans-serif;
                font-weight: 500;
                color: #fff;
                margin-bottom: 50px
            }

            .main__section-1__div-1 span {
                display: flex;
                width: 70%;
                font-size: 36px;
                font-family: Poppins, sans-serif;
                margin-bottom: 55px
            }

            .main__section-1__div-2 {
                display: flex;
                gap: 10px;
                color: #000
            }

            .main__section-1__div-2 .w-box {
                font-family: Poppins, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                background: #fff;
                font-size: 30px;
                line-height: 23px;
                font-weight: 500;
                height: 50px;
                width: 50px;
                border-radius: 10px
            }

            .main__section-1__div-3 {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 6px;
                border-radius: 30px;
                width: 80px;
                background: #fedd00
            }

            .main__section-1__div-4 {
                width: 80%;
                height: 176px;
                border-radius: 22px;
                background-color: #fedd00;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column
            }

            .main__section-1__div-4 .mes {
                font-family: Poppins, sans-serif;
                font-weight: 500;
                font-size: 35px
            }

            .main__section-1__div-4 .mobile-no {
                font-size: 46px;
                font-family: Poppins, sans-serif;
                padding-top: 10px
            }

            .main__section-2 {
                background: #000;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center
            }

            .main__section-2 .y-box {
                background: #fedd00;
                height: 200px;
                width: 400px;
                border-radius: 14px;
                margin-bottom: 40px;
                display: flex;
                align-items: center;
                font-family: Poppins, sans-serif;
                font-weight: 500
            }

            .main__section-2 .w-box {
                background: #fff;
                height: 46px;
                width: 46px;
                border-radius: 14px;
                margin-left: 0;
                margin-right: 40px;
                color: #000;
                text-align: center;
                font-weight: 700;
                font-size: 25px;
                display: flex;
                justify-content: center;
                align-items: center
            }

            .main__section-2__div-1 {
                color: #fff
            }

            .main__section-2__div-1 .title {
                font-family: Kievit, sans-serif;
                font-size: 36px;
                padding-bottom: 30px;
                font-weight: 600;
                padding-top: 80px;
                text-transform: uppercase;
                margin: 0 auto;
                text-align: center
            }

            .main__section-2__div-1 .des {
                font-family: Poppins, sans-serif;
                font-size: 24px;
                line-height: 38px;
                margin: 0 auto 50px;
                width: 70%;
                text-align: center
            }

            .main__section-2 .yellow-sets {
                margin-bottom: 60px;
                display: flex;
                gap: 10px
            }

            .main__section-2 .yellow-sets .y-box {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
                gap: 30px;
                padding-top: 25px;
                padding-left: 20px;
                padding-right: 20px;
                margin-left: 40px
            }

            .main__section-2 .yellow-sets .y-box .title-card {
                display: flex
            }

            .main__section-2 .yellow-sets .y-box .title-card .title {
                font-size: 36px;
                font-family: "DM Sans", sans-serif;
                font-weight: 500
            }

            .main__section-2 .yellow-sets .y-box .des-card {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: left;
                font-size: 20px;
                font-weight: 500;
                line-height: 30px;
                font-family: Poppins, sans-serif
            }

            .mobile {
                display: none
            }
        }

        .border-r {
            border: 1px solid red
        }

        .border-b {
            border: 1px solid #000
        }

        .border-y {
            border: 1px solid #ff0
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ asset('admin/css/mainStyle.css') }}" /> --}}

    <title>Sp_ACE</title>
    <style>
        .info-1 {
            background: #fedd00;
            height: 220px;
            width: 28.5%;
            border-radius: 14px;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            float: left;
            margin: 5px 20px 40px 20px;
        }

        .box-info {
            padding: 10px;
            width: 98%;
            margin: 0 auto;
        }

        .header-text {
            color: #000 !important;
            font-family: Poppins, sans-serif !important;
            font-weight: 500 !important;
            font-size: 48px !important;
        }

        .header {
            width: 45%;
            padding: 25px !important;
            float: left;
        }

        .header-card {
            width: 44%;
            padding: 25px !important;
            float: left;
            text-align: right;
        }

        .header__card-container__des-btn {}

        .main_section-1 {
            width: 50%;
            float: left;
        }

        .bang-code-main {
            width: 49%;
            float: left;
            text-align: center;
        }

        .bang-code-box {
            font-family: Poppins, sans-serif !important;
            background: #fff !important;
            font-size: 30px !important;
            line-height: 23px !important;
            font-weight: 500 !important;
            border-radius: 10px !important;
            padding: 15px 21px !important;
            margin: 5px !important;
        }

        .main__section-1__div-1 {}

        .desktop {
            display: block !important;
        }

        .mobile {
            display: none !important;
        }

        .card-image {
            height: 300px !important;
        }

        .main_section-1 {
            display: block !important;
            width: 100%;
        }

        .main__section-1__div-1 {
            display: block !important;
            width: 50% !important;
            float: left !important;
        }

        .main__section-1__div-2 {
            display: block !important;
            color: #000 !important;
            margin-top: 20px !important;
            float: right !important;
        }


        @media only screen and (max-width: 600px) {

            .desktop {
                display: none !important;
            }

            .mobile {
                display: block !important;
            }

            .card-image {
                height: auto !important;
            }

            .header-text {
                font-size: 22px !important;
                line-height: 30px !important;
            }

            .header {
                width: 100% !important;
                box-sizing: border-box !important;
                padding: 25px 17px !important;
            }

            .header__card-container__des-btn {
                display: none;
            }

            .header-card {
                width: 100% !important;
                padding: 0px !important;
            }

            .main_section-1 {
                width: 100% !important;
                display: flex;
                flex-direction: column;
            }

            .main__section-1__div-1 {
                font-size: 16px !important;
            }

            .bang-code-main {
                margin: 0 auto !important;
                width: 100% !important;
            }

            .bang-code-box {
                font-family: Poppins, sans-serif !important;
                background: #fff !important;
                font-size: 16px !important;
                line-height: 23px !important;
                font-weight: 500 !important;
                border-radius: 10px !important;
                padding: 10px 15px !important;
                width: 28px !important;
                height: 28px !important;
                margin: 5px !important;
            }

            .main__section-1__div-2 {
                display: block !important;
                margin: 0 auto !important;
                /*width: 80% !important;*/
            }

            .des {
                padding: 10px 15px !important;
                box-sizing: border-box;
            }

            .main__section-2__div-1 {
                display: block !important;
                margin: auto !important;
            }

            .info-1 {
                /*width: 85%;*/
                width: 80% !important;
                margin: auto !important;
                margin-bottom: 10px !important;
                float: none !important;

            }

            .title {
                text-align: center !important;
            }

            .main_section-1 .main__section-2__div-1 {
                order: 1 !important;
            }

            .main_section-1 .main__section-1__div-2 {
                order: 2 !important;
            }

            .main_section-1 .main__section-1__div-3 {
                order: 3 !important;
            }

            .main__section-1__div-2 {
                display: block !important;
                color: #000 !important;
                margin-top: 20px !important;
                float: right !important;
            }

            .main__section-1__div-1 {
                width: 100% !important;
                text-align: center !important;
            }

            .main__section-1__div-2 {
                float: unset !important;
            }

            .main__section-1__div-4 {
                height: auto !important;
            }

            .info-1 {
                height: auto !important;
            }

            .main__section-1__div-3 {
                margin: 28px auto 30px !important;
            }
        }
    </style>
</head>

<body>
    <!--  <header class="header">
      <div class="header__logo">
        <img src="https://snr.mydemowork.in/logo-header-1.png" alt="" />
        {{-- <img src="{{ asset('admin/imgs/logo.png') }}" alt="logo" /> --}}
      </div>

      <div class="header__card-container mobile">
        <div class="header__card-container-title">
          Hi {{ $userData['user']['name'] }}, here’s the {{ ucfirst($userData['type']) }} BANG! for {{ $userData['user']['address'] }}
        </div>

        <div class="header__card-container__card">
          @if ($userData['type'] == 'bikeservice')
bang-code-main
          {{-- <img src="{{ asset('frontend/images/bike-card-plain.png') }}" alt="" /> --}}
          <img src="https://snr.mydemowork.in/bike-card-plain.png" alt="" />
@else
<img src="https://snr.mydemowork.in/img1.png" alt="" />
          {{-- <img src="{{ asset('admin/imgs/mobile/card.png') }}" alt="" /> --}}
@endif
        </div>
      </div>

      <div class="header__card-container pc">
        <div class="header__card-container__des">
          <div class="header__card-container__des-title">
            Hi {{ $userData['user']['name'] }}, here’s the {{ ucfirst($userData['type']) }} BANG! for {{ $userData['user']['address'] }}
          </div>

          <div>
            <button class="header__card-container__des-btn">
              Yey! Dave has dropped...
            </button>
          </div>
        </div>

        <div class="header__card-container__card">
          {{-- <img src="{{ asset('admin/imgs/desktop/card.png') }}" alt="" /> --}}
          @if ($userData['type'] == 'bikeservice')
{{-- <img src="{{ asset('frontend/images/bike-card-plain.png') }}" alt="" /> --}}
          <img src="https://snr.mydemowork.in/bike-card-plain.png" alt="" />
@else
{{-- <img src="{{ asset('admin/imgs/mobile/card.png') }}" alt="" /> --}}
          zzmg src="https://snr.mydemowork.in/img1.png" alt="" />
@endif
        </div>
      </div>
    </header>

    <main class="main">
      <section class="main__section-1 mobile">
        <div class="main__section-1__div-1">
          <span> Your Home’s 2023 {{ ucfirst($userData['type']) }} BANG! I.D </span>
        </div>

        <div class="main__section-1__div-2">
          @php
              $bangId = str_split($userData['bang_id']);
          @endphp

          @foreach ($bangId as $index => $bang)
<span class="no-{{ $index + 1 }} w-box">{{ $bang }}</span>
@endforeach

          {{-- <span class="no-2 w-box">6</span>
          <span class="no-3 w-box">6</span>
          <span class="no-4 w-box">4</span>
          <span class="no-5 w-box">8</span> --}}
        </div>

        <div class="main__section-1__div-3"></div>

        <div class="main__section-1__div-4">
          <div class="mes">Call your local BANG! Team</div>
          <div class="mobile-no">08456 436666</div>
        </div>
      </section>

      <section class="main__section-1 pc">
        <div class="main__section-1__div-1">
          <div>
            <span> Your Home’s 2023 {{ ucfirst($userData['type']) }} BANG! I.D </span>
            <div class="main__section-1__div-3"></div>
          </div>

          <div class="main__section-1__div-2">
              @foreach ($bangId as $index => $bang)
<span class="no-{{ $index + 1 }} w-box">{{ $bang }}</span>
@endforeach
          </div>
        </div>

        <div class="main__section-1__div-4">
          <div class="mes">Call your local BANG! Team</div>
          <div class="mobile-no">08456 436666</div>
        </div>
      </section>

      <section class="main__section-2">
        <div class="main__section-2__div-1">
          <div class="title">How it works ?</div>

          <div class="des">
            It’s expensive out there, right? Fear not, your home has 1 BANG a
            year in each category and guarantees you an exclusive price. Here’s
            how it works.
          </div>
        </div>

        <div class="yellow-sets">
          <div class="main__section-2__div-2 y-box">
            <div class="title-card">
              <div class="w-box">✓</div>
              <div class="title">Call</div>
            </div>

            <div class="des-card">
              Select the BANG! type, enter your postcode and find your home
            </div>
          </div>

          <div class="main__section-2__div-3 y-box">
            <div class="title-card">
              <div class="w-box">✓</div>
              <div class="title">Book</div>
            </div>

            <div class="des-card">
              Enter your email and you’ll receive your unique BANG! code shortly
              after
            </div>
          </div>

          <div class="main__section-2__div-4 y-box">
            <div class="title-card">
              <div class="w-box">✓</div>
              <div class="title">Buy</div>
            </div>

            <div class="des-card">
              Follow the instructions to book a quote from your home’s team of
              experts
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">© BANG! Technologies</footer>-->

    <div style="background-color: #fedd00;">
        <div class="desktop">
            <div style="height:70px!important; padding:65px!important; text-align :center">
                <img src="{{ asset('admin/imgs/logo.png') }}" alt="logo" />
            </div>
        </div>
        <div class="header" style="">
            <span class="header-text" style="">Hi {{ $userData['user']['name'] }}, here’s the
                {{ ucfirst($userData['type']) }}
                BANG! for {{ $userData['user']['address'] }} </span>
            <div style="margin-top: 30px;">
                <button class="header__card-container__des-btn">
                    Yey! Dave has dropped...
                </button>
            </div>

            <div class="mobile">
                <div style="height:70px!important; padding:10px!important; text-align :center">
                    <img src="{{ asset('admin/imgs/logo.png') }}" alt="logo" />
                </div>
                <div style="clear:both;"></div>
            </div>

        </div>
        <div>
            <div class="header-card" style="">
                <div class="header__card-container__card">
                    @if ($userData['type'] == 'bikeservice')
                        <img src="{{ asset('frontend/images/bike-card-plain.png') }}" class="card-image"
                            style="width: 100%;" alt="" />
                    @else
                        <img src="{{ asset('admin/imgs/mobile/card.png') }}" alt="" class="card-image"
                            style="width: 100%;" />
                    @endif
                </div>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    <div style="background-color: #da3631;padding: 50px 30px !important;">
        {{--
        <div>
            <div class="main_section-1" style="">
              <div class="main__section-1__div-1" style="margin-bottom: 0px !important">
                <span> Your Home’s 2023 {{ ucfirst($userData['type']) }} BANG! I.D </span>
  </div>
  <div class="main__section-1__div-3"></div>
  </div>
  <div class="bang-code-main" style="">
    <div class="main__section-1__div-2">
      @php
      $bangId = str_split($userData['bang_id']);
      @endphp
      @foreach ($bangId as $index => $bang)
      <span class="no-{{ $index + 1 }} bang-code-box" style=" ">{{ $bang }}</span>
      @endforeach
    </div>
  </div>
  <div style="clear: both"></div>
  <div class="width:100%; margin:0 auto !important;">
    <div class="main__section-1__div-4"
      style="margin-top : 20px !important;display:block !important;height:unset !important; padding: 20px 10px !important; margin: 30px auto !important; ">
      <div class="mes" style="width: 100%;text-align:center;">Call your local BANG! Team</div>
      <div class="mobile-no" style="width: 100%;text-align:center;">08456 436666</div>
    </div>
  </div>
  <div style="clear: both"></div>
  </div>
  --}}
        <!--start bang-code-->
        <div>
            <div class="main_section-1" style="">
                <div class="main__section-1__div-1" style="margin-bottom: 0px !important">
                    <span> Your Home’s 2023 {{ ucfirst($userData['type']) }} BANG! I.D </span>
                </div>
                <div class="bang-code-main" style="">
                    <div class="main__section-1__div-2">
                        @php
                            $bangId = str_split($userData['bang_id']);
                        @endphp
                        @foreach ($bangId as $index => $bang)
                            <span class="no-{{ $index + 1 }} bang-code-box"
                                style=" ">{{ $bang }}</span>
                        @endforeach
                    </div>
                </div>

            </div>
            <div style="clear: both"></div>
            <div class="main__section-1__div-3"></div>

            <div style="clear: both"></div>
            <div class="width:100%; margin:0 auto !important;">
                <div class="main__section-1__div-4"
                    style="margin-top : 20px !important;display:block !important;height:unset !important; padding: 20px 10px !important; margin: 30px auto !important; ">
                    <div class="mes" style="width: 100%;text-align:center;">Call your local BANG! Team</div>
                    <div class="mobile-no" style="width: 100%;text-align:center;">08456 436666</div>
                </div>
            </div>
            <div style="clear: both"></div>
        </div>

        <!--end bang--code-->
    </div>
    <div class="" style="background-color : #000;">
        <div class="main__section-2__div-1">
            <div class="title">How it works ?</div>

            <div class="des">
                It’s expensive out there, right? Fear not, your home has 1 BANG a
                year in each category and guarantees you an exclusive price. Here’s
                how it works.
            </div>
        </div>

        <div class="box-info">
            <div class="info-1" style="display:block;">
                <div class="" style="padding:20px">
                    <div style="width:20%; float:left;">
                        <div style="background: #fff;height: 46px;width: 46px;border-radius : 10px;">
                            <div class="" style="padding: 3px 13px;font-size: 25px;">✓</div>
                        </div>
                    </div>
                    <div class="" style="width:80%; float:left;">
                        <label
                            style='margin-left:10px; font-size: 36px;font-family: "DM Sans", sans-serif; font-weight: 500;'>Call</label>
                    </div>
                    <div style="clear:both"></div>
                    <div style="margin-top:20px;">
                        <div
                            style='text-align: left;font-size: 20px; font-weight: 500;line-height: 30px; font-family: "Poppins", sans-serif;'>
                            Select the BANG! type, enter your postcode and find your home
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-1" style="display:block;">
                <div class="" style="padding:20px">
                    <div style="width:20%; float:left;">
                        <div style="background: #fff;height: 46px;width: 46px;border-radius : 10px;">
                            <div class="" style="padding: 3px 13px;font-size: 25px;">✓</div>
                        </div>
                    </div>
                    <div class="" style="width:80%; float:left;">
                        <div
                            style='margin-left:10px; font-size: 36px;font-family: "DM Sans", sans-serif; font-weight: 500;'>
                            Book
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div style="margin-top:20px;">
                        <div
                            style='text-align: left;font-size: 20px; font-weight: 500;line-height: 30px; font-family: "Poppins", sans-serif;'>
                            Enter your email and you’ll receive your unique BANG! code shortly after
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-1" style="display:block;">
                <div class="" style="padding:20px">
                    <div style="width:20%; float:left;">
                        <div style="background: #fff;height: 46px;width: 46px;border-radius : 10px;">
                            <div class="" style="padding: 3px 13px;font-size: 25px;">✓</div>
                        </div>
                    </div>
                    <div class="" style="width:80%; float:left;">
                        <div
                            style='margin-left:10px; font-size: 36px;font-family: "DM Sans", sans-serif; font-weight: 500;'>
                            Buy
                        </div>
                    </div>
                    <div style="clear:both"></div>
                    <div style="margin-top:20px;">
                        <div
                            style='text-align: left;font-size: 20px; font-weight: 500;line-height: 30px; font-family: "Poppins", sans-serif;'>
                            Follow the instructions to book a quote from your home’s team of experts

                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
    <div class="footer" style="background-color: #1b1717;">© BANG! Technologies</div>
</body>

</html>
