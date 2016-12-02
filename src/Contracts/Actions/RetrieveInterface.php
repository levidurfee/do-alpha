<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

interface RetrieveInterface
{
    public function retrieve(ClientInterface $client): ResponseInterface;
}
