@extends('layouts.app')

@push('styles')
@vite(['resources/css/student/completion.css'])
@endpush

@section('content')
<div class="completion-container">
    <div class="celebration-header">
        <i class="fa-solid fa-trophy trophy-icon"></i>
        <h2>¡Felicidades, Comandante!</h2>
        <p>Has completado satisfactoriamente la misión: <strong>Modelado de Criaturas 3D</strong></p>
    </div>

    <div class="diploma-card glass-panel">
        <div class="diploma-border">
            <div class="diploma-content">
                <div class="diploma-header">
                    <img src="{{ asset('assets/logo-cohete.png') }}" alt="Logo" class="diploma-logo">
                    <h1>Certificado de Excelencia</h1>
                    <p class="license-type">Licencia de Especialista Galáctico</p>
                </div>

                <div class="diploma-body">
                    <p>Este reconocimiento se otorga a:</p>
                    <h2 class="student-name">Celeste Aguilar Lara</h2>
                    <p class="course-text">Por haber dominado con éxito los conocimientos de:</p>
                    <h3 class="course-name">"Modelado de Criaturas Gelatinosas en 3D"</h3>
                </div>

                <div class="diploma-footer">
                    <div class="signature">
                        <div class="signature-line"></div>
                        <p class="sign-name">Vic Robledo</p>
                        <p>Instructor de Vuelo</p>
                    </div>
                    <div class="diploma-seal">
                        <i class="fa-solid fa-shuttle-space"></i>
                    </div>
                    <div class="date-info">
                        <div class="signature-line"></div>
                        <p>Fecha de Emisión</p>
                        <p><strong>06 / Mayo / 2026</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="actions-row">
        <button class="btn-download"><i class="fa-solid fa-download"></i> Descargar Diploma</button>
    </div>

    <div class="feedback-container glass-panel">
        <div class="feedback-header">
            <i class="fa-solid fa-comment-dots"></i>
            <h3>Reporte de Misión Final</h3>
            <p>Tu opinión ayuda a otros astronautas a elegir su próximo destino.</p>
        </div>

        <form action="#" class="feedback-form">
            {{-- Grupo de Estrellas --}}
            <div class="rating-group">
                <p>¿Qué tal estuvo la experiencia?</p>
                <div class="stars-input">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5">★</label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4">★</label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3">★</label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2">★</label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1">★</label>
                </div>
            </div>

            {{-- Grupo de Comentario --}}
            <div class="comment-group">
                <label for="mission-notes">Notas de la bitácora:</label>
                <textarea id="mission-notes" placeholder="Cuéntanos qué fue lo que más te gustó de este viaje..."></textarea>
            </div>

            <button type="submit" class="btn-send-mission">
                Enviar Reporte <i class="fa-solid fa-paper-plane"></i>
            </button>
        </form>
    </div>
</div>
@endsection