<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public function success($datos, $codigo)
    {
        return response()->json(['data' => $datos], $codigo);
    }

    public function error($mensaje, $codigo)
    {
        return response()->json(['message' => $mensaje, 'code' => $codigo], $codigo);
    }
}
