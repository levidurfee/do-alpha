<?php

namespace wappr\DigitalOcean\Contracts;

interface ClientInterface
{
    public function post(string $action, ModelInterface $model);
    public function get(string $action);
    public function delete(string $action, ModelInterface $model, string $method);
    public function setHttpClient($client);
}
