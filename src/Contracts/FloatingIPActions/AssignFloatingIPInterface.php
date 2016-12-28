<?php

namespace wappr\DigitalOcean\Contracts\FloatingIPActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface AssignFloatingIPInterface.
 */
interface AssignFloatingIPInterface extends ModelInterface
{
    /**
     * AssignFloatingIPInterface constructor.
     *
     * @param string $type
     * @param int    $droplet_id
     * @param string $ip
     */
    public function __construct(string $type, int $droplet_id, string $ip);
}
