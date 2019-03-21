<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Cliente;

class VerificarClienteOkRequestTest extends TestCase
{
    public function testVerificarClienteOkRequest()
    {
        $cliente = new Cliente();
        $cliente->nombre = "Leo";
        $cliente->apellido = "Alfonso";
        $cliente = $cliente->toArray();

        $response = $this->json('POST', '/verificarCliente', $cliente);

        $response->assertStatus(200);
    }
}
