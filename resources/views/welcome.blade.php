<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Seletivo</title>

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <style>
            body {
                margin:  0;
           }

           
            .page-content {
                width: 100%;
                margin:  0 auto;
                background-image: -moz-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
                background-image: -webkit-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
                background-image: -ms-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
                display: flex;
                display: -webkit-flex;
                justify-content: center;
                -o-justify-content: center;
                -ms-justify-content: center;
                -moz-justify-content: center;
                -webkit-justify-content: center;
                align-items: center;
                -o-align-items: center;
                -ms-align-items: center;
                -moz-align-items: center;
                -webkit-align-items: center;
            }
            .form-v6-content  {
                background: #fff;
                width: 968px;
                border-radius: 8px;
                -o-border-radius: 8px;
                -ms-border-radius: 8px;
                -moz-border-radius: 8px;
                -webkit-border-radius: 8px;
                margin: 50px 0;
                font-family: 'Nunito', sans-serif;
                color: #fff;
                font-weight: 700;
                position: relative;
                display: flex;
                display: -webkit-flex;
            }
            .form-v6-content .form-left {
                margin-bottom: -6px;
            }
            .form-v6-content .form-left img {
                padding-left:20px;
                padding-top:20px;
                padding-bottom:20px;
                border-top-left-radius: 8px;
                border-bottom-left-radius: 8px;
            }
            .form-v6-content .form-detail {
                padding: 30px 40px;
                position: relative;
                width: 100%;
            }
            .form-v6-content .form-detail h2 {
                color: #333;
                font-size: 35px;
                text-align: center;
                position: relative;
                padding: 6px 0 0;
                margin-bottom: 47px;
            }
            .form-v6-content .form-row {
                width: 100%;
            }
            .form-v6-content .form-detail .form-row-last {
                text-align: center;
            }
            .form-v6-content .form-detail .input-text {
                margin-bottom: 0px;
            }
            .form-v6-content .form-detail input {
                width: 100%;
                padding: 0px 15px 10px 15px;
                border: 2px solid transparent;
                border-bottom: 2px solid #e5e5e5;
                appearance: unset;
                -moz-appearance: unset;
                -webkit-appearance: unset;
                -o-appearance: unset;
                -ms-appearance: unset;
                outline: none;
                -moz-outline: none;
                -webkit-outline: none;
                -o-outline: none;
                -ms-outline: none;
                font-family: 'Nunito', sans-serif;
                font-size: 16px;
                font-weight: 700;
                color: #333;
            }
            .form-row{
                margin-bottom: 25px;
            }
            .form-v6-content .form-detail .form-row input:focus {
                border-bottom: 2px solid #fe892a;
                width:100%;
                box-shadow: 0 0 0 0;

            }
            .form-v6-content .form-detail .register {
                background: #fe892a;
                border-radius: 6px;
                -o-border-radius: 6px;
                -ms-border-radius: 6px;
                -moz-border-radius: 6px;
                -webkit-border-radius: 6px;
                width: 160px;
                box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
                -o-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
                -ms-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
                -moz-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
                -webkit-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
                border: none;
                margin: 11px 0 50px 0px;
                cursor: pointer;
                font-family: 'Nunito', sans-serif;
                color: #fff;
                font-weight: 700;
                font-size: 18px;
            }
            .form-v6-content .form-detail .register:hover {
                background: #e37b27;
            }
            .form-v6-content .form-detail .form-row-last input {
                padding: 13px;
                width:100%;
            }
            input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #666;
            font-size: 16px;
            }
            input::-moz-placeholder { /* Firefox 19+ */
            color: #666;
            font-size: 16px;
            }
            input:-ms-input-placeholder { /* IE 10+ */
            color: #666;
            font-size: 16px;
            }
            input:-moz-placeholder { /* Firefox 18- */
            color: #666;
            font-size: 16px;
            }

            /* Responsive */
            @media screen and (max-width: 991px) {
                .form-v6-content {
                    margin: 50px 20px;
                    flex-direction:  column;
                    -o-flex-direction:  column;
                    -ms-flex-direction:  column;
                    -moz-flex-direction:  column;
                    -webkit-flex-direction:  column;
                }
                .form-v6-content .form-left {
                    width: 100%;
                }
                .form-v6-content .form-left img {
                    width: 100%;
                    border-bottom-left-radius: 0px;
                    border-top-right-radius: 8px;
                }
                .form-v6-content .form-detail {
                    padding: 30px 20px 30px 20px;
                    width: auto;
                }
                .form-v6-content .form-detail .form-row input {
                    width: 100%;
                }
                .form-v6-content .form-detail .register {
                    margin-bottom: 80px;
                }
            }
            @media screen and (max-width: 767px) {
                .form-v6-content .form-detail .form-row input {
                    width: 100%;
                }
            }

            @media screen and (max-width: 575px) {
                .form-v6-content .form-detail .form-row input {
                    width: 100%;
                }
            }


            .login{
                background-image: -moz-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
                background-image: -webkit-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
                background-image: -ms-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
                display:flex;
                flex-direction:row;
                justify-content:center;
                padding:10px 30px 10px 10px;
                color:white;
                font-weight:600;
                text-decoration:none;
                
            }

            .login a{
                padding:10px 30px 10px 10px;
                color:white;
                font-weight:600;
                text-decoration:none;
            }

            .login .title{
                flex-grow:1;
                text-align:center;
            }

            .invalid-feedback {
                color:red;
                font-size:12px;
                margin-left:15px;

            }

            
        </style>

    </head>
    <body class="form-v6">
        <div class="login">
            <a class="title">Seja bem vindo ao seletivo 2020!</a>
            <a  href="{{ route('login') }}">Entrar</a>
        
        </div>
        
        <div class="page-content">
            <div class="form-v6-content">
                <div class="form-left">
                    <img src="{{ asset('img/logo.png') }}" alt="form">
                </div>                       
                @form_component(['action'=>route('students.store'),'method'=>"POST"])
                  @alert(['msg'=>session('msg'), 'status'=>session('status')])
    
                  @endalert 
                  <h2>Inscreva-se</h2>
                  @include('admin.students.form')
                  <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Enviar">
                  </div>
                @endform_component    
                
            </div>
        </div>
    </body>

    <script>
       window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
       }, 3000);
    </script>
    
</html>
