@extends('layouts.app')

@push('styles')
    @vite(['resources/css/user/message.css'])
@endpush

@section('content')
<div class="messages-wrapper">
    <div class="comms-layout">
        
        <aside class="comms-sidebar glass-panel">
            <div class="sidebar-header">
                <i class="fa-solid fa-tower-broadcast"></i>
                <h2>Frecuencias</h2>
            </div>
            
            <ul class="instructor-list">

                <li class="instructor-item active">
                    <a href="#">
                        <div class="avatar-wrapper">
                            <div class="status-indicator online"></div>
                            <img src="{{ asset('assets/default-avatar.png') }}" alt="Instructor" class="comms-avatar">
                        </div>
                        <div class="instructor-info">
                            <span class="name">Vic Robledo</span>
                            <span class="status-text">En línea</span>
                        </div>
                    </a>
                </li>

                <li class="instructor-item">
                    <a href="#">
                        <div class="avatar-wrapper">
                            <div class="status-indicator"></div>
                            <img src="{{ asset('assets/default-avatar.png') }}" alt="Instructor" class="comms-avatar">
                        </div>
                        <div class="instructor-info">
                            <span class="name">Sultan 24</span>
                            <span class="status-text">Fuera de órbita</span>
                        </div>
                    </a>
                </li>
            </ul>
        </aside>

        <main class="chat-terminal glass-panel">
            <header class="chat-header">
                <div class="current-user">
                    <i class="fa-solid fa-comments"></i>
                    <h3>Transmisión Privada: <span class="text-gradient">Vic Robledo</span></h3>
                </div>
            </header>

            <div class="chat-history">
    
                <div class="msg-row">
                    <img src="{{ asset('assets/default-avatar.png') }}" class="msg-avatar">
                    <div class="bubble instructor-bubble">
                        <p>¡Hola Celeste! Revisé tu último avance en el modelo de la criatura. Los shaders están increíbles. 🚀</p>
                        <span class="msg-time">10:20 PM</span>
                    </div>
                </div>

         
                <div class="msg-row user-row">
                    <div class="bubble user-bubble">
                        <p>¡Muchas gracias Vic! Me costó un poco ajustar la transparencia, pero el resultado valió la pena.</p>
                        <span class="msg-time">10:22 PM</span>
                    </div>
                    <img src="{{ asset('assets/default-avatar.png') }}" class="msg-avatar">
                </div>
            </div>

            <div class="chat-input-area">
                <form action="#" class="input-form">
                    <textarea placeholder="Escribe un mensaje estelar..." rows="1"></textarea>
                    <button type="button" class="btn-send">
                        <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </main>

    </div>
</div>
@endsection