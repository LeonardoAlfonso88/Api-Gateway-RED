<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Cliente;

class VerificarClienteBadRequestTest extends TestCase
{
    public function testVerificarClienteBadRequest()
    {
        $cliente = new Cliente();
        $cliente->nombre = "a2sd";
        $cliente->apellido = "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        $cliente = $cliente->toArray();

        $response = $this->json('POST', '/verificarCliente', $cliente);

        $response->assertStatus(422);
        echo $response->getContent();
    }
}
