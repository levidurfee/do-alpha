<?php

namespace wappr\DigitalOcean\Contracts\FloatingIPActions;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface UnAssignFloatingIPActionInterface.
 */
interface UnAssignFloatingIPActionInterface extends ModelInterface
{
    /**
     * UnAssignFloatingIPActionInterface constructor.
     *
     * @param string $floating_ip
     */
    public function __construct(string $floating_ip);

    /**
     * @return string
     */
    public function getFloatingIp(): string;
}
