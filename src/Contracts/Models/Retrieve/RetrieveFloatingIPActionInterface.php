<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveFloatingIPActionInterface.
 */
interface RetrieveFloatingIPActionInterface extends ModelInterface
{
    /**
     * RetrieveFloatingIPActionInterface constructor.
     *
     * @param string $floating_ip
     * @param int    $action_id
     */
    public function __construct(string $floating_ip, int $action_id);

    /**
     * @return string
     */
    public function getFloatingIp(): string;

    /**
     * @return int
     */
    public function getActionId(): int;
}
