<?php

namespace wappr\DigitalOcean\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateTagInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class CreateTagRequest.
 */
class CreateTagRequest extends RequestModel implements ModelInterface, CreateTagInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * CreateTagInterface constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}