<?php

use App\Controller\WebSocket;

return function (Mix\Vega\Engine $vega) {
    $vega->handleCall('/websocket', [new WebSocket(), 'index'])->methods('GET');
};
