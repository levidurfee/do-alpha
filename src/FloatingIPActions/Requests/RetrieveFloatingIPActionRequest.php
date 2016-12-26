<?php

namespace wappr\DigitalOcean\FloatingIPActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\FloatingIPActions\RetrieveFloatingIPActionInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

class RetrieveFloatingIPActionRequest extends RequestModel implements ModelInterface, RetrieveFloatingIPActionInterface
{
    /**
     * @var int
     */
    protected $action_id;

    /**
     * @var string
     */
    protected $floating_ip;

    /**
     * {@inheritdoc}
     */
    public function __construct(string $floating_ip, int $action_id)
    {
        $this->floating_ip = $floating_ip;
        $this->action_id = $action_id;
    }

    /**
     * {@inheritdoc}
     */
    public function getFloatingIp(): string
    {
        return $this->floating_ip;
    }

    /**
     * {@inheritdoc}
     */
    public function getActionId(): int
    {
        return $this->action_id;
    }
}
