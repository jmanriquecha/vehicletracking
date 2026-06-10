@extends('layouts.app')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="bi bi-speedometer2 me-2"></i>
                Panel de Control
            </h3>
        </div>

        <div class="card-body">
            <h5>Bienvenido a FleetTrack</h5>

            <p class="mb-0">
                Centralice la gestión de sus vehículos y mantenga un control detallado
                de recorridos, kilometraje, consumo de combustible y mantenimientos
                desde un único lugar.
            </p>
        </div>
    </div>
    @endsection