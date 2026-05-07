@extends('layouts.app')

@push('styles')
@vite(['resources/css/instructor/sales.css'])
@endpush

@section('content')
<div class="sales-wrapper">
    <div class="sales-grid-layout">

        <aside class="filters-sidebar glass-panel">
            <div class="filter-header">
                <i class="fa-solid fa-filter-list"></i>
                <h3>Filtrar Misiones</h3>
            </div>

            <form action="#" class="filter-form">
                <div class="filter-group">
                    <label><i class="fa-solid fa-calendar-days"></i> Rango de Creación</label>
                    <input type="date" name="start_date" placeholder="Inicio">
                    <input type="date" name="end_date" placeholder="Fin">
                </div>

                <div class="filter-group">
                    <label><i class="fa-solid fa-tags"></i> Categoría</label>
                    <select name="categoria">
                        <option value="all">Todas las categorías</option>
                        <option value="1">Animación 3D</option>
                        <option value="2">VFX & Arte</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label><i class="fa-solid fa-satellite"></i> Estado del Curso</label>
                    <select name="estado">
                        <option value="all">Todos los estados</option>
                        <option value="activo">Solo activos</option>
                        <option value="inactivo">Solo inactivos</option>
                    </select>
                </div>

                <button type="button" class="btn-apply-filters">
                    Sincronizar Datos <i class="fa-solid fa-sync"></i>
                </button>
            </form>
        </aside>

        <main class="sales-main-content">
            <div class="section-header-row">
                <div class="title-group">
                    <h2>Lista de <span class="text-gradient">Cursos</span></h2>
                    <p>Monitoreo de ingresos y niveles de la tripulación.</p>
                </div>
                <a href="#" class="btn-add-mission">
                    <i class="fa-solid fa-plus"></i> Nueva Misión
                </a>
            </div>

            <div class="table-container glass-panel">
                <table class="main-sales-table">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Inscritos</th>
                            <th>Avance Promedio</th>
                            <th>Ingresos</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Fila de ejemplo 1 --}}
                        <tr class="course-row-active">
                            <td class="course-title-cell">
                                <strong>Modelado de Criaturas 3D</strong>
                            </td>
                            <td><i class="fa-solid fa-user-astronaut"></i> 128</td>
                            <td>
                                <div class="mini-progress">
                                    <span>85%</span>
                                    <div class="bar">
                                        <div class="fill" style="width: 85%"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="revenue-cell">$57,600.00</td>
                            <td class="actions-cell">
                                <button class="btn-action edit" title="Editar"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-action disable" title="Deshabilitar"><i class="fa-solid fa-eye-slash"></i></button>
                            </td>
                        </tr>
                        {{-- Fila de ejemplo 2 --}}
                        <tr>
                            <td class="course-title-cell"><strong>Shaders Neón en UE5</strong></td>
                            <td><i class="fa-solid fa-user-astronaut"></i> 45</td>
                            <td>
                                <div class="mini-progress">
                                    <span>40%</span>
                                    <div class="bar">
                                        <div class="fill" style="width: 40%"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="revenue-cell">$20,250.00</td>
                            <td class="actions-cell">
                                <button class="btn-action edit"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-action disable"><i class="fa-solid fa-eye-slash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-right">Total Acumulado:</td>
                            <td class="total-revenue-sum">$77,850.00 MXN</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <section class="students-detail-section glass-panel">
                <div class="detail-header">
                    <h3><i class="fa-solid fa-users-viewfinder"></i> Detalle de Tripulación: <span>Modelado de Criaturas 3D</span></h3>
                </div>
                <div class="table-scroller">
                    <table class="students-table">
                        <thead>
                            <tr>
                                <th>Navegante</th>
                                <th>Inscripción</th>
                                <th>Avance</th>
                                <th>Inversión</th>
                                <th>Vía de Pago</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vic Robledo</td>
                                <td>07/05/2026</td>
                                <td class="pct-bold">100%</td>
                                <td>$450.00</td>
                                <td><span class="pay-method">PayPal</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

    </div>
</div>
@endsection