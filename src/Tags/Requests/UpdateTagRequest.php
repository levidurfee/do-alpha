<?php

namespace wappr\DigitalOcean\Tags\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Tags\UpdateTagInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class UpdateTagRequest.
 */
class UpdateTagRequest extends RequestModel implements ModelInterface, UpdateTagInterface
{
    /**
     * @var string
     */
    protected $tag_name;

    /**
     * @var string
     */
    protected $name;

    /**
     * UpdateTagInterface constructor.
     *
     * @param string $tag_name Old Tag Name
     * @param string $name     New Tag Name
     */
    public function __construct(string $tag_name, string $name)
    {
        $this->tag_name = $tag_name;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getTagName(): string
    {
        return $this->tag_name;
    }
}
