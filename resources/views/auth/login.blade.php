@extends('layouts.app')

@section('content')

<section class="login-block">
   <div class="container col-10 col-md-4 col-sm-6 col-xs-8 login-container">
      <div class="row justify-content-center">
         <div class="col login-sec">
            <h2 class="text-center">Entrar</h2>
            <form  method="POST" class="login-form" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

               <div class="form-group">
                  <label for="exampleInputEmail1" >Email</label>
                  <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
               </div>

               <div class="form-group">
                  <label for="exampleInputPassword1" >Senha</label>
                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
               </div>

               <div class="form-check">
                  <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   {{ __('Remember Me') }}
                  </label>
                  <button type="submit" class="btn btn-login float-right">
                    {{ __('Login') }}
                  </button>
                   
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection
