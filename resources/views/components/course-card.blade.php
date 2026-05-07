@props([
'titulo' => 'Título del Curso',
'categoria' => 'Categoría',
'precio' => '0.00',
'imagen' => 'assets/placeholder.png',
'ventas' => null,
'rating' => null,
'fecha' => null,
'instructor' => null,
'niveles' => null
])

<div class="course-card">
    <a href="#">
        <div class="course-img-container">
            <img src="{{ $imagen }}" alt="{{ $titulo }}" class="course-img">

        </div>

        <div class="course-info">
            <h3>{{ $titulo }}</h3>
            <span class="course-category">{{ $categoria }}</span>
            @if($rating)
            <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <span class="rating-num">({{ $rating }})</span>
            </div>
            @endif

            @if($instructor)
            <p class="instructor-name"><strong>Instructor:</strong> {{ $instructor }}</p>
            @endif
            @if($niveles)
            <p class="course-levels"><strong>Niveles:</strong> {{ $niveles }}</p>
            @endif

            <p class="description">Aprende habilidades increíbles en este curso diseñado para creativos.</p>

            <div class="course-footer">
                <span class="price">${{ number_format($precio, 2) }}</span>

                @if($ventas)
                <span class="stats"><i class="fa-solid fa-fire"></i> {{ $ventas }} ventas</span>
                @endif

                @if($fecha)
                <span class="stats"><i class="fa-regular fa-calendar"></i> {{ $fecha }}</span>
                @endif
            </div>
        </div>
    </a>
</div>