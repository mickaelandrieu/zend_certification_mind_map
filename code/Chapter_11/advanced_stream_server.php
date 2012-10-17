<?php
/**
 * User: maxoumask
 * Date: 17/10/12
 * Time: 08:02
 */

$socket = stream_socket_server('tcp://0.0.0.0:1037');
while($conn = stream_socket_accept($socket)){
    fwrite($conn, 'Hello world' . PHP_EOL);
    fclose($conn);
}
fclose($socket);