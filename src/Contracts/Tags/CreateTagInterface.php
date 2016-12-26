<?php

namespace wappr\DigitalOcean\Contracts\Tags;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface CreateTagInterface.
 */
interface CreateTagInterface extends ModelInterface
{
    /**
     * CreateTagInterface constructor.
     *
     * @param string $name
     */
    public function __construct(string $name);
}
