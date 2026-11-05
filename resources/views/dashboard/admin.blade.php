@extends('layouts.app')
@section('titulo', 'Painel da professora')

@section('content')
<h1 class="h3 mb-4">Olá, {{ auth()->user()->name }}</h1>

<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3">
        <div class="card h-100"><div class="card-body">
            <div class="text-muted small">Total vendido</div>
            <div class="fs-4 fw-semibold">R$ {{ number_format($totalVendido, 2, ',', '.') }}</div>
        </div></div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card h-100"><div class="card-body">
            <div class="text-muted small">Pedidos pagos</div>
            <div class="fs-4 fw-semibold">{{ $pedidosPagos }}</div>
        </div></div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card h-100"><div class="card-body">
            <div class="text-muted small">Pedidos pendentes</div>
            <div class="fs-4 fw-semibold">{{ $pedidosPendentes }}</div>
        </div></div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card h-100"><div class="card-body">
            <div class="text-muted small">Materiais ativos</div>
            <div class="fs-4 fw-semibold">{{ $materiaisAtivos }}</div>
        </div></div>
    </div>
</div>

<div class="card">
    <div class="card-header fw-semibold">Últimos pedidos</div>
    <div class="table-responsive">
        <table class="table mb-0 align-middle">
            <thead><tr><th>#</th><th>Aluno</th><th>Total</th><th>Status</th><th>Data</th></tr></thead>
            <tbody>
            @forelse ($ultimosPedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->usuario->name }}</td>
                    <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                    <td>
                        <span class="badge text-bg-{{ $pedido->status === 'pago' ? 'success' : 'warning' }}">
                            {{ ucfirst($pedido->status) }}
                        </span>
                    </td>
                    <td>{{ $pedido->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center text-muted py-4">Nenhum pedido ainda.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection