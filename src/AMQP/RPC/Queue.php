<?php

namespace Anboo\ApiBundle\AMQP\RPC;

class Queue extends Exchange
{
    /**
     * Queue constructor.
     * @param string $queue
     */
    public function __construct(string $queue)
    {
        parent::__construct('', $queue);
    }
}