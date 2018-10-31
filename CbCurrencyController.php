$monedas = CbCurrency::get();   // Devolverá todas las monedas
use App\CbCurrency;
return view('monedas.index')->with('monedas', $monedas);
