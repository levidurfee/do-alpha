<?php

namespace wappr\digitalocean\Contracts\Client;

use wappr\digitalocean\Contracts\RequestContract;

interface ClientContract
{
    public function post($endpoint, RequestContract $requestContract);
}
