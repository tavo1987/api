<?php


namespace App\Http\Controllers;

use App\Cliente;


class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('oauth',['except'=> ['index']]);

    }


    public function index()
    {
        $cliente = Cliente::all();

        return $this->success($cliente,200);
    }


    public function show($id)
    {
        $cliente = Cliente::find($id);

        if($cliente)
        {
            return $this->success($cliente,200);
        }else{
            return $this->error('cliente no encontrado',404);
        }




    }

}