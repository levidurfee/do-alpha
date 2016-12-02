<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use wappr\DigitalOcean\Contracts\ClientInterface;

interface ListInterface
{
    public function getAll(ClientInterface $client);
}
