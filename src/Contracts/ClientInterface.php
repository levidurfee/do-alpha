<?php

namespace wappr\DigitalOcean\Contracts;

use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    public function post(string $action, ModelInterface $model): ResponseInterface;
    public function get(string $action): ResponseInterface;
    public function delete(string $action, ModelInterface $model, string $method): ResponseInterface;
    public function setHttpClient($client);
    public function setDebug(bool $debug);
}
