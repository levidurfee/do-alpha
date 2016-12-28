<?php

namespace wappr\DigitalOcean\Contracts\Requests;

/**
 * Class RequestModel.
 */
abstract class RequestModel
{
    /**
     * @return array Returns an array of the current object model
     */
    public function return(): array
    {
        return get_object_vars($this);
    }
}
