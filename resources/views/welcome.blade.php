<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config ('app.name','Proposal_app')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
              background-image: url(bsn.jpg);
                color: #636b6f;
                font-family: 'Merriweather', serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
                font-weight: bold;
                color:white;
            }


            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 30px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .button {
              border-radius: 4px;
              background-color:  #ef86a7;
              border: none;
              color: #FFFFFF;
              text-align: center;
              font-size: 28px;
              padding: 5px;
              width: 150px;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
              }

              .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
              }

              .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
              }

              .button:hover span {
                padding-right: 25px;
              }

              .button:hover span:after {
                opacity: 1;
                right: 0;
              }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}"></a>
                        <a href="{{ route('register') }}"></a>
                    @endauth
                </div>
            @endif


             <div class="content" style="">
                 <div class="title m-b-md" style="color:white;">
                     Welcome To Proposa

                 </div>


                 <div class="links">
                     <a href="{{ url('/home') }} " ><button class="button"><span>Home</span></button></a>
                     <a href=" {{ route('register') }}" ><button class="button"><span>Register</span></button></a>

                     <a href=" {{ route('login') }}"><button class="button"><span>Login</span></button></a>

                 </div>
             </div>
         </div>

    </body>
</html>
