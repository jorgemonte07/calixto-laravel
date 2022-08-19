@extends('layouts.app')
@section('css')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Style -->
<link rel="stylesheet" href="css/style.css">
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          {{-- <img src="images/iglesia.jpg" alt="Image" class="img-fluid"> --}}
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div style="text-align: center" class="mb-4">
              <h3>Registrar</h3>
             
            <form method="POST" action="{{ route('register') }}">
                @csrf

              <div class="form-group first">
                <label for="username">Nombre</label>
                {{-- <input type="text" class="form-control" id="email" name="email" required value="{{ old('email') }}"  autofocus> --}}
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          

              </div>
              <div class="form-group last mb-4">
                <label for="password">Correo</label>
                {{-- <input type="password" class="form-control" required name="password" id="password"> --}}
                <input id="email" type="email" class="form-control" name="email" required autocomplete="current-password">
                </div>
                <div class="form-group first">
                    <label for="username">Contraseña</label>
                    {{-- <input type="text" class="form-control" id="email" name="email" required value="{{ old('email') }}"  autofocus> --}}
                    <input id="password" type="password" minlength="8" class="form-control " name="password"  required autocomplete="email" autofocus>
              
    
                  </div>
              <div class="form-group last mb-4">
                <label for="password">Confirmar Contraseña</label>
                {{-- <input type="password" class="form-control" required name="password" id="password"> --}}
                <input id="password-confirm" type="password"  minlength="8"  class="form-control" name="password_confirmation" required >
                </div>
            
            {{-- <input type="submit" value="Iniciar Sesión" class="btn btn-block btn-primary">        --}}
            <button type="submit" class="btn btn-block btn-primary">
                {{ __('Registrar') }}
            </button>
            
            </form>
            <div style="text-align: center" class="mb-4">
                <br>
                <a style="text-decoration: none" href="{{ route('login') }}">Volver</a>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @section('js')
 <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
@endsection

@endsection
