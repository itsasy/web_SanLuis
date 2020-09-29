<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Operaciones;

class FindController extends Controller
{
    protected $operacion;

    public function __construct(Operaciones $operacion)
    {
        $this->operacion = $operacion;
    }

    public function alerts(Request $request)
    {
        if (session()->exists('autenticacion')) {
            $list = $this->operacion->Alerts();
            return view('alertList', compact('list'));
        } else {
            return redirect()->route('Login');
        }
    }
    
    public function deleteAlert($id)
    {
        if (session()->exists('autenticacion')) {
            $this->operacion->deleteAlert($id);
            return redirect()->route('alertas');
        } else {
            return redirect()->route('Login');
        }
    }


    public function graph()
    {
        if (session()->exists('autenticacion')) {
            return view('graph');
        } else {
            return redirect()->route('Login');
        }
    }
    
   

}
