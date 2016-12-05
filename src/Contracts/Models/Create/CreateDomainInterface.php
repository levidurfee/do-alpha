<?php

namespace wappr\DigitalOcean\Contracts\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface CreateDomainInterface.
 */
interface CreateDomainInterface extends ModelInterface
{
    public function __construct(string $name, string $ip_address);
    public function getName(): string;
    public function getIpAddress(): string;
}
