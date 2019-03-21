<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class ServiceSendRequest
{
    protected $servicio;
    protected $timeout;

    public function __construct()
    {
        $this->servicio = resolve('ListadoServicios');
        $this->timeout = resolve('ParametrosConfiguracion')->getParametro('restTimeOut');
    }

    public function sendRequest($llave, $contenido)
    {
        $response = null;
        switch ($this->servicio->getMetodo($llave))
        {
            case 'GET':
                $response = $this->getRequest($llave, $contenido);
                break;
            case 'PUT':
                $response = $this->postRequest($llave, $contenido);
                break;
            case 'POST':
                $response = $this->postRequest($llave, $contenido);
                break;
            case 'DELETE':
                $response = $this->postRequest($llave, $contenido);
                break;
            default:
               return "Error";
        }

        return $response;
    }

    private function getRequest($llave, $contenido)
    {
        try
        {
            $client = new Client(['timeout'  => $this->timeout->valor,]);
            $url = $this->servicio->getUrl($llave);
            $url = preg_replace_array('/{.*}/', $contenido, $url);
            $response = $client->get($url);
            return $response;
        }
        catch(ConnectException $e)
        {
            Log::error('ClientesController.get '.$e->getMessage());
            return response()->apiResponse(Response::HTTP_NOT_FOUND);
        }
    }

    private function postRequest($llave, $contenido)
    {
        try
        {
            $client = new Client(['timeout'  => $this->timeout->valor,]);
            $url = $this->servicio->getUrl($llave);
            $headers = ["content-type" => 'application/json'];
            $body = json_encode($contenido);
            $request = new Request('POST', $url, $headers, $body);
            $response = $client->send($request);
            return $response->getBody()->getContents();
        }
        catch(ConnectException $e)
        {
            Log::error('ClientesController.get '.$e->getMessage());
            return response()->apiResponse(Response::HTTP_NOT_FOUND);
        }
    }
}
