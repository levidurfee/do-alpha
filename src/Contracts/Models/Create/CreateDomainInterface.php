<?php

namespace wappr\DigitalOcean\Contracts\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface CreateDomainInterface.
 */
interface CreateDomainInterface extends ModelInterface
{
    /**
     * CreateDomainInterface constructor.
     *
     * @param string $name
     * @param string $ip_address
     */
    public function __construct(string $name, string $ip_address);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getIpAddress(): string;
}
