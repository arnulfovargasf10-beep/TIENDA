<?php
namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(){

        $clientes = Cliente::all();
     
        return view('index', compact('clientes'));
    }
}