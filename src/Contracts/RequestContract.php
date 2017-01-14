<?php

namespace wappr\digitalocean\Contracts;

abstract class RequestContract
{
    public function fetch()
    {
        return get_object_vars($this);
    }
}
