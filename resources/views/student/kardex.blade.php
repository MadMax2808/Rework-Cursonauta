@extends('layouts.app')


@push('styles')
    @vite(['resources/css/student/kardex.css'])
@endpush

@section('content')
<div class="kardex-wrapper">
  
    <aside class="kardex-filters glass-panel">
        <div class="scan-line"></div>
        <div class="filter-header">
            <i class="fa-solid fa-satellite-dish"></i>
            <h3>Filtros de Escaneo</h3>
        </div>
        
        <form action="#" class="filter-form">
            <div class="filter-group">
                <label><i class="fa-solid fa-calendar-alt"></i> Fecha Inicio</label>
                <input type="date" value="2026-01-01">
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-calendar-check"></i> Fecha Fin</label>
                <input type="date" value="2026-05-07">
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-tags"></i> Categoría</label>
                <select>
                    <option>Todas</option>
                    <option>Animación 3D</option>
                    <option>VFX & Arte</option>
                </select>
            </div>

            <div class="filter-group">
                <label><i class="fa-solid fa-satellite"></i> Estado</label>
                <select>
                    <option>Todos</option>
                    <option selected>Completados</option>
                    <option>En curso</option>
                </select>
            </div>

            <button type="button" class="apply-filters-btn">Sincronizar Panel</button>
        </form>
    </aside>

    
    <main class="kardex-main">
        <div class="kardex-header-title">
            <h2><span class="text-gradient">Kardex</span> de Navegante</h2>
            <p>Registro histórico de misiones y certificaciones obtenidas.</p>
        </div>

        <div class="table-container-scroller glass-panel">
            <table class="kardex-table">
                <thead>
                    <tr>
                        <th class="col-main">Curso</th>
                        <th>Inscripción</th>
                        <th>Último Acceso</th>
                        <th>Progreso</th>
                        <th>Terminación</th>
                        <th>Categoría</th> {{-- <-- AQUÍ ESTÁ DE VUELTA --}}
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
              
                    <tr>
                        <td class="course-name-cell">
                            <strong>Modelado de Criaturas 3D</strong>
                        </td>
                        <td>28/01/2026</td>
                        <td>Ayer</td>
                        <td>
                            <div class="progress-cell-wrapper">
                                <span class="pct-num">100%</span>
                                <div class="mini-bar-track"><div class="fill completed" style="width: 100%"></div></div>
                            </div>
                        </td>
                        <td>01/05/2026</td>
                       
                        <td class="category-cell">Animación 3D</td> 
                        <td>
                            <a href="#" class="btn-certificado-log">
                                <i class="fa-solid fa-medal"></i> Diploma
                            </a>
                        </td>
                    </tr>

               
                    <tr>
                        <td class="course-name-cell">
                            <strong>Shaders Neón en UE5</strong>
                        </td>
                        <td>15/04/2026</td>
                        <td>Hoy</td>
                        <td>
                            <div class="progress-cell-wrapper">
                                <span class="pct-num">45%</span>
                                <div class="mini-bar-track"><div class="fill active" style="width: 45%"></div></div>
                            </div>
                        </td>
                        <td class="na-cell">N/A</td>
                        {{-- DATO DE CATEGORÍA --}}
                        <td class="category-cell">VFX & Arte</td>
                        <td>
                            <span class="status-badge active">En Órbita</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection