<?php

namespace wappr\DigitalOcean\FloatingIPActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\FloatingIPActions\AssignFloatingIPInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

class AssignFloatingIPActionsRequest extends RequestModel implements ModelInterface, AssignFloatingIPInterface
{
    /**
     * @var int
     */
    protected $droplet_id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $ip;

    /**
     * AssignFloatingIPActionsRequest constructor.
     *
     * @param string $type
     * @param int    $droplet_id
     * @param string $ip
     */
    public function __construct(string $type, int $droplet_id, string $ip)
    {
        $this->type = $type;
        $this->droplet_id = $droplet_id;
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
}
