<?php

namespace wappr\DigitalOcean\FloatingIPActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\FloatingIPActions\UnAssignFloatingIPActionInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

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
