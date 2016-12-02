<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use wappr\DigitalOcean\Contracts\ClientInterface;

interface UpdateInterface
{
    public function update(ClientInterface $client);
}
