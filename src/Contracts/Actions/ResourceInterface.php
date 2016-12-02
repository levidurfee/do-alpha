<?php

namespace wappr\DigitalOcean\Contracts\Actions;

use Psr\Http\Message\ResponseInterface;
use wappr\DigitalOcean\Contracts\ClientInterface;

interface ResourceInterface
{
    public function create(ClientInterface $client): ResponseInterface;
    public function delete(ClientInterface $client): ResponseInterface;
}
