@extends('layouts.app')

@push('styles')
@vite(['resources/css/user/perfil.css'])
@endpush

@section('content')
<div class="profile-wrapper">

    <input type="hidden" id="userId" value="123">

    <div class="profile-grid-layout">

        <div class="edit-profile-container glass-panel">
            <div class="profile-header">
                <div class="avatar-container">
                    <div class="avatar-glow"></div>
                    <img src="{{ asset('assets/default-avatar.png') }}" alt="Foto de Perfil" id="profile-pic">
                    <label for="photo" class="edit-photo-badge">
                        <i class="fa-solid fa-camera"></i>
                    </label>
                </div>
                <h2>Configuración de <span class="text-gradient">Navegante</span></h2>
                <button id="edit-btn" class="btn-edit-mode"><i class="fa-solid fa-user-gear"></i> Editar Datos</button>
            </div>

            <form id="profile-form" action="#" method="POST" enctype="multipart/form-data">
                <input type="file" id="photo" name="photo" accept="image/*" style="display: none;">

                <select id="rol" name="rol" hidden>
                    <option value="3" selected>Estudiante</option>
                    <option value="2">Instructor</option>
                </select>

                <div class="form-grid">
                    <div class="form-section">
                        <h3><i class="fa-solid fa-id-card"></i> Datos Personales</h3>
                        <div class="input-group">
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" class="inputext" id="nombre" name="nombre" placeholder="Celeste Aguilar Lara" disabled>
                        </div>
                        <div class="input-group">
                            <label for="genero">Género</label>
                            <select id="genero" name="genero" disabled>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="2003-08-28" disabled>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3><i class="fa-solid fa-shield-halved"></i> Cuenta y Seguridad</h3>
                        <div class="input-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" id="correo" name="correo" placeholder="celeste@lmad.com" disabled>
                        </div>
                        <div class="input-group">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" class="inputext" id="contrasena" name="contrasena" value="********" disabled>
                            <span class="input-hint">Mínimo 8 caracteres estelares</span>
                        </div>
                        <div class="form-footer">
                            <button type="submit" id="save-btn" class="btn-save" style="display: none;">
                                Guardar Cambios <i class="fa-solid fa-floppy-disk"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <aside class="stats-sidebar">
    
            <div class="stat-card glass-panel rank-highlight">
                <div class="stat-icon"><i class="fa-solid fa-user-astronaut"></i></div>
                <div class="stat-info">
                    <span class="stat-label">Rango</span>
                    <span class="stat-value">Especialista 3D</span>
                </div>
            </div>

            <div class="mini-stats-grid">
                <div class="mini-stat glass-panel">
                    <span class="num">12</span>
                    <span class="txt">Cursos</span>
                </div>
                <div class="mini-stat glass-panel">
                    <span class="num">5</span>
                    <span class="txt">Diplomas</span>
                </div>
            </div>

            <div class="skills-card glass-panel">
                <h3>Habilidades</h3>
                <div class="tags-container">
                    <span class="skill-tag">React</span>
                    <span class="skill-tag">Unreal Engine 5</span>
                    <span class="skill-tag">3D Art</span>
                    <span class="skill-tag">Laravel</span>
                </div>
            </div>
        </aside>

    </div>
</div>
@endsection