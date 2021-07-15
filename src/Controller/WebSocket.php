<?php

namespace App\Controller;

use App\Service\Session;
use Mix\Vega\Context;
use Mix\WebSocket\Upgrader;

class WebSocket
{

    /**
     * @var Upgrader
     */
    protected $upgrader;

    /**
     * WebSocket constructor.
     * @param Upgrader $upgrader
     */
    public function __construct(Upgrader $upgrader)
    {
        $this->upgrader = $upgrader;
    }

    /**
     * @param Context $ctx
     */
    public function index(Context $ctx)
    {
        $conn = $this->upgrader->upgrade($ctx->request, $ctx->response);
        $session = new Session($conn);
        $session->start();
    }

}
