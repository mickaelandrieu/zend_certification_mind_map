<?php
/**
 * User: maxoumask
 * Date: 17/10/12
 * Time: 08:02
 */

$socket = stream_socket_client('tcp://0.0.0.0:1037');
stream_filter_append($socket, 'zlib.inflate');
while(!feof($socket)){
    echo fread($socket, 100);
}
fclose($socket);