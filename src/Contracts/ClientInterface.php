<?php

namespace wappr\DigitalOcean\Contracts;

interface ClientInterface
{
    public function post(string $action, ModelInterface $model);
    public function get(string $string);
}
