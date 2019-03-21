<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

use App\Models\Cliente;
use App\Models\ConfiguracionRespuesta;
use App\Http\Requests\VerificarClienteRequest;


class APIController extends Controller
{
    public function verificarCliente(VerificarClienteRequest $request)
    {
        $llave = 'verificarClienteExistente';
        $cliente = new Cliente();
        $cliente = $request->only($cliente->getFillable());
        $documento = $cliente->documento;
        $request = resolve('SendRequest');
        $response = $request->sendRequest($llave, $user);

        if($response->getStatusCode() == Response::HTTP_OK)
        {
            Cache::store('user')->forever($cliente->documento, $cliente->toJson());
        }

        return response()->apiResponse($response->getStatusCode());
    }

    public function crearCliente(Request $request)
    {
        //return json_encode($request->all());
        //$cliente = new Cliente();
        //$cliente->nombreCliente = "Leo";
        //$cliente->apellidoCliente = "Pollo";
        //return response()->apiResponse(200, $cliente);
        /*$request = resolve('SendRequest');
        /*$validator = resolve('ListadoServicios');
        dd($validator->validateResponse('verificarClienteExistente'));*/
    }
}
