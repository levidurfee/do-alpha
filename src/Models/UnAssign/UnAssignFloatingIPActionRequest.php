<?php

namespace wappr\DigitalOcean\Models\UnAssign;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\UnAssign\UnAssignFloatingIPActionInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class UnAssignFloatingIPActionRequest.
 */
class UnAssignFloatingIPActionRequest extends RequestModel implements ModelInterface, UnAssignFloatingIPActionInterface
{
    /**
     * @var string
     */
    private $floating_ip;

    /**
     * @var string
     */
    protected $type = 'unassign';

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
