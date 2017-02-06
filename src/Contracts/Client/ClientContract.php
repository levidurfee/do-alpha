<?php

namespace wappr\digitalocean\Contracts\Client;

use wappr\digitalocean\Contracts\Requests;

interface ClientContract
{
    public function post($endpoint, Requests $requestContract);
}
