# Api-Gateway-RED
# VerificarUsuario

Verificar a partir del documento de identidad si el cliente existe o está bloqueado.

**Request:** `/verificarCliente/`

**Metodo:** `POST`

**Response:**
En caso de exito, no se enviará el tag error del json y el código será 200.
En caso de error devolverá los siguientes códigos:

* 404 - Error de comunicación
* 401 - Cliente bloqueado
* 409 - Cliente existente
* 422 - Error en los datos enviados:

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "atributo1": [
      "MensajeError1",
      "MensajeError2"
    ],
    "atributo2": [
      "MensajeError1"
    ]
  }
}
```
