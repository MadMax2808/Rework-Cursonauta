@extends('layouts.app')

@push('styles')
@vite(['resources/css/student/pago.css'])
@endpush

@section('content')
<div class="payment-wrapper">
    <div class="payment-grid">

        <section class="manifest-section glass-panel">
            <div class="panel-header">
                <i class="fa-solid fa-shuttle-space"></i>
                <h2>Manifiesto de <span class="text-gradient">Misión</span></h2>
            </div>

            <div class="mission-card">
                <div class="mission-visual">

                    <div class="energy-core"></div>
                </div>
                <div class="mission-data">
                    <h3>Modelado de Criaturas Gelatinosas 3D</h3>
                    <p class="mission-desc">Aprende a dominar físicas de gel, shaders translúcidos y sculpting orgánico en Blender para tus personajes.</p>
                </div>
            </div>

            <div class="price-manifest">
                <div class="price-row">
                    <span>Costo de Expedición:</span>
                    <span>$450.00 MXN</span>
                </div>
                <div class="price-row">
                    <span>Impuestos Galácticos:</span>
                    <span>$0.00 MXN</span>
                </div>
                <div class="price-row total">
                    <span>Total a Transferir:</span>
                    <span class="final-price">$450.00 MXN</span>
                </div>
            </div>
        </section>

        <section class="terminal-section glass-panel">
            <div class="panel-header">
                <i class="fa-solid fa-credit-card"></i>
                <h3>Terminal de Pago</h3>
            </div>

            <div class="input-group">
                <label for="paymentMethod">Vía de Acceso Financiero</label>
                <select id="paymentMethod">
                    <option value="">Seleccione un método...</option>
                    <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                    <option value="paypal">PayPal</option>
                    <option value="transferencia">Transferencia Bancaria</option>
                </select>
            </div>

            <div class="payment-actions">

                <div id="paypal-button-placeholder" class="paypal-mock">
                    <span>PayWith <strong>PayPal</strong></span>
                </div>

                <button type="button" class="btn-confirm-payment">
                    Confirmar Transmisión <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>

            <div class="security-info">
                <i class="fa-solid fa-shield-halved"></i>
                <span>Conexión encriptada mediante protocolo CursoNauta Secure Layer</span>
            </div>
        </section>

    </div>
</div>
@endsection