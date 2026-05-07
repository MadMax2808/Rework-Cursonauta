@extends('layouts.app')

@push('styles')
@vite(['resources/css/guest/details-course.css'])
@endpush

@section('content')
<div class="course-container">

    <div class="course-header" style="--bg-image: url('{{ asset('assets/placeholder.png') }}'); background-image: var(--bg-image);">
        <div class="header-content">
            <h1 class="course-title">Modelado de Criaturas Gelatinosas 3D</h1>
            <div class="header-badges">
                <span class="course-category">Animación 3D</span>
                <p class="course-author">
                    <i class="fa-solid fa-user-astronaut"></i>
                    <strong>Instructor:</strong> Celeste Aguilar
                    <a href="#" class="message-link" title="Enviar mensaje"><i class="fa-solid fa-paper-plane"></i></a>
                </p>
            </div>
        </div>
    </div>

    <div class="course-description glass-panel">
        <h2>Sobre esta misión</h2>
        <p>Aprende a crear personajes con texturas traslúcidas y físicas de rebote. Este curso cubre desde el sculpting básico en ZBrush hasta los shaders avanzados en Unreal Engine 5 para lograr ese look "Jelmy" perfecto que todos aman.</p>
    </div>

    <div class="course-content">

        <div class="video-and-topics">

            <div class="video-section glass-panel">
                <div class="video-wrapper">
                    <div class="video-dummy">
                        <i class="fa-solid fa-play"></i>
                    </div>
                </div>

                <div class="progress-container">
                    <div class="progress-text">
                        <span>Tu progreso en la órbita</span>
                        <span>45%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 45%;"></div>
                    </div>
                </div>
            </div>

            <aside class="topics-section glass-panel">
                <div class="topic-title-main">
                    <i class="fa-solid fa-rocket"></i>
                    <h2>Módulos</h2>
                </div>

                <ul class="topics-list">
                    <li class="topic-item">
                        <button class="topic-btn active">
                            <span>Módulo 1: Introducción al Gel</span>
                            <span class="arrow">▼</span>
                        </button>
                        <ul class="subtopics-list" style="display: block;">
                            <li><a href="#" class="subtopic-link"><i class="fa-solid fa-video"></i> Video: Concepto Jelmy</a></li>
                            <li><a href="#" class="subtopic-link"><i class="fa-solid fa-file-pdf"></i> PDF: Guía de Referencias</a></li>
                        </ul>
                    </li>
                    <li class="topic-item">
                        <button class="topic-btn">
                            <span>Módulo 2: Sculpting Orgánico</span>
                            <span class="arrow">▶</span>
                        </button>
                    </li>
                    <li class="topic-item">
                        <button class="topic-btn locked">
                            <span><i class="fa-solid fa-lock"></i> Módulo 3: Shaders Neón</span>
                            <span class="arrow">▶</span>
                        </button>
                    </li>
                </ul>
            </aside>

        </div>

        <div class="course-resources glass-panel">
            <div class="resource-header" onclick="this.parentElement.classList.toggle('open')">
                <div class="resource-title-group">
                    <i class="fa-solid fa-box-archive"></i>
                    <span>Recursos de la Misión</span>
                </div>
                <i class="fa-solid fa-chevron-down toggle-icon"></i>
            </div>

            <div class="resource-content">
                <ul class="resource-list">
                    <li>
                        <a href="#" class="resource-link">
                            <div class="file-info">
                                <i class="fa-solid fa-file-pdf"></i>
                                <span>Guía de Atajos - Unreal Engine 5.pdf</span>
                            </div>
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="resource-link">
                            <div class="file-info">
                                <i class="fa-solid fa-file-image"></i>
                                <span>Texturas_Base_Jelmy.zip</span>
                            </div>
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bottom-sections">
            <section class="feedback-section glass-panel">
                <h2>Valoraciones de la Tripulación</h2>
                <div class="ratings-summary">
                    <div class="stars-neon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <span class="rating-num">4.8 (120 astronautas)</span>
                </div>

                <div class="comments-list">
                    <div class="comment-card">
                        <div class="comment-user">
                            <div class="user-avatar"></div>
                            <div class="user-meta">
                                <strong>Vic Robledo</strong>
                                <span>Hace 2 días</span>
                            </div>
                        </div>
                        <p>¡Este curso es de otro planeta! Las físicas de gelatina quedaron increíbles.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="purchase-float-bar">
        <div class="price-info">
            <span class="price-label">Acceso total:</span>
            <span class="price-amount">$450.00 MXN</span>
        </div>
        <button class="purchase-btn-main">
            Adquirir Curso <i class="fa-solid fa-shuttle-space"></i>
        </button>
    </div>
</div>
@endsection