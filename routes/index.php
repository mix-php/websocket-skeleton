<?php

use App\Controller\WebSocket;

return function (Mix\Vega\Engine $vega) {
    $upgrader = new Mix\WebSocket\Upgrader();

    $vega->handleCall('/websocket', [new WebSocket($upgrader), 'index'])->methods('GET');
};
