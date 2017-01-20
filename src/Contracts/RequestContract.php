<?php

namespace wappr\digitalocean\Contracts;

abstract class RequestContract
{
    /**
     * @return array
     */
    public function fetch()
    {
        return get_object_vars($this);
    }
}
