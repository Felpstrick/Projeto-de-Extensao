<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Pedido;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = $request->user();

        if ($user->isAdministrador()) {
            return view('dashboard.admin', [
                'totalVendido'     => Pedido::where('status', Pedido::PAGO)->sum('total'),
                'pedidosPagos'     => Pedido::where('status', Pedido::PAGO)->count(),
                'pedidosPendentes' => Pedido::where('status', Pedido::PENDENTE)->count(),
                'materiaisAtivos'  => Material::ativos()->count(),
                'ultimosPedidos'   => Pedido::with('usuario')->latest()->take(5)->get(),
            ]);
        }

        return view('dashboard.aluno', [
            'acessos' => $user->acessos()->with('material')->latest('liberado_em')->take(6)->get(),
        ]);
    }
}