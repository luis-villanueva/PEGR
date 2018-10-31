# PEGR
PEGR

<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
 
use App\CbCurrency;
 
class CbCurrencyController extends Controller
{
  /**
  * Muestra una lista de las monedas.
  *
  * @return Response
  */
  public function index()
  {
    // Devolverá todas las monedas
    $monedas = CbCurrency::get();
    return view('monedas.index')->with('monedas', $monedas);
  }
}
<h1 class="text-primary">Lista de Monedas</h1>
 
<table class="table table-bordered" id="tableMonedas">
  <thead>
    <tr>
        <th class="text-center">Id moneda</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Activa</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($monedas as $moneda)
        <tr>
            <td class="text-center">{{ $moneda->idcurrency}}</td>
            <td class="text-center">{{ $moneda->currency}}</td>
            <td class="text-center">{{ $moneda->description }}</td>
            <td class="text-center">{{ $moneda->isactive}}</td>
            <td>
                <a href="{{ route('monedas.show', $moneda->idcurrency) }}" class="btn btn-info">Ver</a>
 
            </td>
        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th class="text-center">Id moneda</th>
      <th class="text-center">Nombre</th>
      <th class="text-center">Descripción</th>
      <th class="text-center">Fecha</th>
      <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>
