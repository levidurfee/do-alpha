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
    protected $dropletId;
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
     * @param int    $dropletId
     * @param string $ip
     */
    public function __construct(string $type, int $dropletId, string $ip)
    {
        $this->type = $type;
        $this->dropletId = $dropletId;
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
