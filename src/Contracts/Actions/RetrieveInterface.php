<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use wappr\DigitalOcean\Contracts\ClientInterface;

interface RetrieveInterface
{
    public function retrieve(ClientInterface $client);
}
