@extends('layouts.auth')
@section('title', 'Únete a la Tripulación')

@section('content')
<div class="register-container register-wide">
    <h2>Crear Cuenta</h2>

    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group photo-group">
            <label for="photo">Foto de Perfil</label>
            <div class="custom-file-upload">
                <input type="file" id="photo" name="photo" accept="image/*">
                <i class="fa-solid fa-camera"></i> Seleccionar Imagen
            </div>
        </div>


        <div class="form-row">
            <div class="form-group">
                <label for="full-name">Nombre Completo:</label>
                <input type="text" id="full-name" name="full_name" placeholder="Tu nombre">
            </div>

            <div class="form-group">
                <label for="role">Rol:</label>
                <select id="role" name="role">
                    <option value="instructor">Instructor</option>
                    <option value="estudiante" selected>Estudiante</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="gender">Género:</label>
                <select id="gender" name="gender">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="birthdate">Fecha de Nacimiento:</label>
                <input type="date" id="birthdate" name="birthdate">
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="correo" placeholder="tu@correo.com">
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="contrasena" placeholder="Mínimo 8 caracteres">
        </div>

        <button type="submit" class="btn-register">Comenzar Aventura <i class="fa-solid fa-paper-plane"></i></button>

        <div class="login-link">
            <p>¿Ya tienes cuenta? <a href="{{ url('/login') }}">Inicia sesión</a></p>
        </div>
    </form>
</div>
@endsection