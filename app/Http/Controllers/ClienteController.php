<?php


namespace App\Http\Controllers;

use App\Cliente;


class ClienteController extends Controller
{

    public function index()
    {
        $cliente = Cliente::all();

        return $this->suceess($cliente,200);
    }


    public function show($id)
    {
        $cliente = Cliente::find($id);

        if($cliente)
        {
            return $this->suceess($cliente,200);
        }else{
            return $this->error('cliente no encontrado',404);
        }




    }

}