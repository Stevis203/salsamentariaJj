@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('content')
<div class="container">

<div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <label for="rol" class="col-md-4 col-form-label text-md-end">{{__('Roles')}}</label>
            <div class="col-md-6">
                <select name="rol" id="rol" class="form-select" autofocus>
                    <option value="Cliente">Cliente</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirma Contraseña') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Registrate') }}
                </button>
            </div>
        </div>
    </form>
</div>
                    
@endsection

</body>
</html>

