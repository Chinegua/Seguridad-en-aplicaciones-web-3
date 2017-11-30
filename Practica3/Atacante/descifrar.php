<?php
/**
 * Created by PhpStorm.
 * User: chinegua
 * Date: 30/11/17
 * Time: 11:33
 */

$key = "jf8)*h9oOpl;.Lpa"; // Mete aquí la clave robada en el apartado 6.
$iv = "abcd12344321dcba"; // Mete aquí el vector de inicialización CBC para el cliente.
$texto= " U0upaDz4eTeuvv5eLnAN2J1MgdJ/f6H4qgfRS7GKjtI="; // Mete aquí el número de tarjeta de crédito del cliente.
$texto_cifrado = base64_decode($texto);
$texto_claro = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $texto_cifrado, MCRYPT_MODE_CBC, $iv);

echo $texto_claro;