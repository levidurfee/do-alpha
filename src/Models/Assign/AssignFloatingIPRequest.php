<?php

namespace wappr\DigitalOcean\Models\Assign;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Assign\AssignFloatingIPInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class AssignFloatingIPRequest extends ModelMethods implements ModelInterface, AssignFloatingIPInterface
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
     * AssignFloatingIPRequest constructor.
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
