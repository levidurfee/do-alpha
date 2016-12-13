<?php

namespace wappr\DigitalOcean\Contracts\Models\Assign;

use wappr\DigitalOcean\Contracts\ModelInterface;

interface AssignFloatingIPInterface extends ModelInterface
{
    public function __construct(string $type, int $dropletId, string $ip);
}
