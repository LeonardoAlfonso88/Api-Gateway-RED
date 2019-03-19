# Api-Gateway-RED
# VerificarUsuario

Verificar a partir del documento de identidad si el cliente existe o está bloqueado.

**Request:** `/verificarCliente/`
**Metodo:** `POST`
**Response:**
En caso de exito, no se enviará el tag error del json y el código será 200.
En caso de error devolverá los siguientes códigos:

* 400 - Error en los datos
* 401 - Cliente bloqueado
* 409 - Cliente existente

```json
{
  "code": 200,
  "success": {
    "userToken": "value"
  },
  "error": {
    "msgerr": "mensaje"
  }
}
```