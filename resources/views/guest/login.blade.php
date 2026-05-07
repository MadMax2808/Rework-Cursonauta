@extends('layouts.auth')
@section('title', 'Iniciar Sesión')

@section('content')
<div class="register-container">
    <h2>Iniciar Sesión</h2>
    <form action="#" method="POST">
       
        <div class="form-group">
            <label for="email">Correo:</label>
            <input type="email" id="email" name="correo" placeholder="astronauta@cursonauta.com">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="contrasena" placeholder="••••••••">
        </div>

        <button type="submit" class="btn-register">Iniciar Sesión</button>

        <div class="login-link">
            <p>¿No tienes cuenta? <a href="{{ url('/register') }}">Regístrate aquí</a></p>
        </div>
    </form>
</div>
@endsection