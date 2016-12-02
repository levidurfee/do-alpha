<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

interface DeleteDropletInterface
{
    public function __construct($droplet_id);

    /**
     * @return int
     */
    public function getId(): int;
}
