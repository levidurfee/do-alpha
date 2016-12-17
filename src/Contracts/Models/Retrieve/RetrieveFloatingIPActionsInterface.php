<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveFloatingIPActionsInterface.
 */
interface RetrieveFloatingIPActionsInterface extends ModelInterface
{
    /**
     * RetrieveFloatingIPActionsInterface constructor.
     *
     * @param string $floating_ip
     */
    public function __construct(string $floating_ip);

    /**
     * @return string
     */
    public function getFloatingIp(): string;
}
