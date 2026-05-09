@extends('layouts.app')

@push('styles')
@vite(['resources/css/instructor/newcourse.css'])
@endpush

@section('content')
<div class="add-courses-page">
    <div class="container-fluid">

        <header class="page-header">
            <div class="header-content">
                <i class="fa-solid fa-rocket glow-icon"></i>
                <h2>Lanzar Nueva <span class="text-gradient">Misión</span></h2>
                <p>Configura los parámetros, niveles y recursos técnicos de tu nuevo curso.</p>
            </div>
        </header>

        <form id="course-form" action="#" method="POST" enctype="multipart/form-data" class="mission-form">
            <div class="form-layout">

                <section class="glass-panel general-info">
                    <div class="section-title">
                        <i class="fa-solid fa-gears"></i>
                        <h3>Configuración General</h3>
                    </div>

                    <div class="form-grid general-info-grid">
                        <div class="upload-field">
                            <label for="course-image">Identificador Visual (Portada)</label>
                            <div class="custom-upload-terminal">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <span>Arrastra o selecciona imagen</span>
                                <input type="file" id="course-image" name="course_image" accept="image/*">
                            </div>
                        </div>

                        <div class="input-stack">
                            <div class="field">
                                <label for="course-title">Título de la Misión</label>
                                <input type="text" id="course-title" name="course_title" placeholder="Ej: Master en Shaders Orgánicos">
                            </div>

                            <div class="field">
                                <label for="course-category">Sector (Categoría)</label>
                                <select id="course-category" name="course_category">
                                    <option value="" disabled selected>Selecciona sector...</option>
                                    <option value="1">Animación 3D & VFX</option>
                                    <option value="2">Desarrollo Frontend</option>
                                    <option value="3">Ilustración Digital</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="description-field">
                        <label for="course-description">Bitácora de Misión (Descripción)</label>
                        <textarea id="course-description" name="course_description" rows="4" placeholder="Describe los objetivos y el conocimiento que se transmitirá..."></textarea>
                    </div>
                </section>

                {{-- SECCIÓN 2: LOGÍSTICA Y NIVELES --}}
                <section class="glass-panel logistics-info">
                    <div class="section-title">
                        <i class="fa-solid fa-shuttle-space"></i>
                        <h3>Logística de Vuelo y Niveles</h3>
                    </div>

                    <div class="logistics-grid">
                        <div class="field">
                            <label for="levels">Niveles de Trayectoria</label>
                            <input type="number" id="levels" name="levels" min="1" placeholder="Cantidad de niveles">
                        </div>
                        <div class="field">
                            <label for="course-price">Costo Total (MXN)</label>
                            <input type="number" id="course-price" name="course_price" step="0.01" placeholder="$0.00">
                        </div>
                        <div class="field">
                            <label for="level-price">Costo por Nivel (Opcional)</label>
                            <input type="number" id="level-price" name="level_price" step="0.01" placeholder="$0.00">
                        </div>
                    </div>

                    {{-- Bahía de Carga de Niveles (Dinámica vía JS) --}}
                    <div id="level-container" class="level-dynamic-grid"></div>
                </section>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-launch">
                    Inicializar Lanzamiento <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
@vite(['resources/js/instructor/newcourse.js'])
@endpush