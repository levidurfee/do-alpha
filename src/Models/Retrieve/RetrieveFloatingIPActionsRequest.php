<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveFloatingIPActionsInterface;
use wappr\DigitalOcean\Models\RequestModel;

class RetrieveFloatingIPActionsRequest extends RequestModel implements ModelInterface, RetrieveFloatingIPActionsInterface
{
    /**
     * @var string
     */
    protected $floating_ip;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $floating_ip)
    {
        $this->floating_ip = $floating_ip;
    }

    /**
     * {@inheritdoc}
     */
    public function getFloatingIp(): string
    {
        return $this->floating_ip;
    }
}
