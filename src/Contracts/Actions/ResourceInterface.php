<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use wappr\DigitalOcean\Contracts\ClientInterface;

interface ResourceInterface
{
    public function create(ClientInterface $client);
    public function delete(ClientInterface $client);
}
