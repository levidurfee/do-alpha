<?php

namespace wappr\DigitalOcean\Models;

/**
 * Class ModelMethods.
 */
abstract class ModelMethods
{
    /**
     * @return array Returns an array of the current object model
     */
    public function return(): array
    {
        return get_object_vars($this);
    }
}
