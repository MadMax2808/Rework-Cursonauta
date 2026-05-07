@extends('layouts.app')


@push('styles')
    @vite(['resources/css/guest/allcurses.css', 'resources/css/components/course-card.css'])
@endpush

@section('content')
<div class="search-container">
    
    <aside class="filters-sidebar">
        <div class="filters-card">
            <h3><i class="fa-solid fa-filter"></i> Filtrar Por:</h3>
            
            <form action="#">
                <div class="filter-group">
                    <label for="category">Categoría:</label>
                    <select id="category" name="categoria">
                        <option value="">Todas las categorías</option>
                        <option value="1">Diseño Digital</option>
                        <option value="2">Programación</option>
                        <option value="3">Animación 3D</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="user">Instructor:</label>
                    <select id="user" name="user">
                        <option value="">Todos los Instructores</option>
                        <option value="1">Vic Robledo</option>
                        <option value="2">Sultan 24</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label>Rango de fechas:</label>
                    <div class="date-inputs">
                        <input type="date" name="start-date" class="date-input">
                        <input type="date" name="end-date" class="date-input">
                    </div>
                </div>

                <button type="submit" class="apply-filters-btn">
                    Aplicar Filtros <i class="fa-solid fa-wand-magic-sparkles"></i>
                </button>
            </form>
        </div>
    </aside>

    <main class="courses-display">
        <div class="display-header">
            <h2>Cursos <span class="text-gradient">Disponibles</span></h2>
            <p>Mostrando los mejores resultados para tu búsqueda.</p>
        </div>

        <div class="course-grid">
    
            <x-course-card 
                titulo="Master en Unreal Engine 5" 
                categoria="Videojuegos" 
                precio="850.00" 
                instructor="Vic Robledo" 
                niveles="15 Niveles" 
                rating="4.9"
                ventas="340"
            />

            <x-course-card 
                titulo="Fullstack con Laravel y React" 
                categoria="Programación" 
                precio="1200.00" 
                instructor="Sultan 24" 
                niveles="24 Niveles" 
                rating="5.0"
                fecha="2026-05-01"
            />

            <x-course-card 
                titulo="Ilustración para Personajes" 
                categoria="Arte" 
                precio="450.00" 
                instructor="Celeste Aguilar" 
                niveles="8 Niveles" 
                rating="4.8"
                ventas="120"
            />
            
            <x-course-card titulo="Diseño UI/UX Avanzado" categoria="Diseño" precio="550" instructor="Design Team" niveles="10" rating="4.5" />
            <x-course-card titulo="Modelado en Blender" categoria="3D" precio="399" instructor="3D Artist" niveles="6" rating="4.7" />
        </div>
    </main>
</div>
@endsection