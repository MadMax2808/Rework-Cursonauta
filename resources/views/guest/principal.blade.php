@extends('layouts.app')


@push('styles')
@vite(['resources/css/guest/principal.css', 'resources/css/components/course-card.css'])
@endpush

@section('content')

<section id="inicio" class="hero">
    <div class="hero-content">
        <h2>Explora y Mejora tus <span class="text-gradient">Habilidades Creativas</span></h2>
        <p>Únete a una comunidad que aprende y comparte conocimientos creativos.</p>
        <a href="#" class="btn-hero">Explorar Cursos <i class="fa-solid fa-rocket"></i></a>
    </div>
</section>


<div class="main-container">
    <section class="courses-section">
        <div class="section-header">
            <h2><i class="fa-solid fa-fire"></i> Cursos Más Vendidos</h2>
        </div>
        <div class="course-grid">

            <x-course-card titulo="Animación 3D" categoria="Diseño" precio="499" ventas="150" />
            <x-course-card titulo="React Avanzado" categoria="Web" precio="599" ventas="89" />
            <x-course-card titulo="Ilustración Pro" categoria="Arte" precio="350" ventas="210" />
        </div>
    </section>

    <section class="courses-section">
        <div class="section-header">
            <h2><i class="fa-solid fa-star"></i> Mejor Calificados</h2>
        </div>
        <div class="course-grid">
            <x-course-card titulo="Photoshop Master" categoria="Diseño" precio="299" rating="4.9" />
            <x-course-card titulo="Laravel 11" categoria="Backend" precio="650" rating="5.0" />
            <x-course-card titulo="Blender para Juegos" categoria="3D" precio="420" rating="4.7" />
        </div>
    </section>

    <section class="courses-section">
        <div class="section-header">
            <h2><i class="fa-solid fa-clock"></i> Recientes</h2>
        </div>
        <div class="course-grid">
            <x-course-card titulo="Ilustración Digital" categoria="Arte" precio="320" fecha="May 2026" />
        </div>
    </section>
</div>
@endsection