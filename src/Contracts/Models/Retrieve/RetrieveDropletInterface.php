<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

interface RetrieveDropletInterface
{
    public function __construct($droplet_id);

    /**
     * @return int
     */
    public function getDropletId(): int;
}