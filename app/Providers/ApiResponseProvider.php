<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Arr;

class ApiResponseProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Response::macro('apiResponse', function($code, $object = NULL, $message = NULL){
            $response = array();

            if(!is_null($message))
            {
                $response = Arr::add($response, 'message', $message);
            }

            if(!is_null($object))
            {
                if(resolve('RespuestasHttp')->validateResponse())
                {
                    $response = Arr::add($response, 'success', $object);
                }
                else
                {
                    $response = Arr::add($response, 'errors', $object);
                }
            }

            return response(json_encode($response),$code);
        });
    }
}
