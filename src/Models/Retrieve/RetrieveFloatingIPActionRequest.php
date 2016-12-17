<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveFloatingIPActionInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class RetrieveFloatingIPActionRequest extends ModelMethods implements ModelInterface, RetrieveFloatingIPActionInterface
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
