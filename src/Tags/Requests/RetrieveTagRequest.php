<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Tags\RetrieveTagInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

class RetrieveTagRequest extends RequestModel implements ModelInterface, RetrieveTagInterface
{
    /**
     * @var string
     */
    protected $tag_name;

    /**
     * RetrieveTagInterface constructor.
     *
     * @param string $tag_name
     */
    public function __construct(string $tag_name)
    {
        $this->tag_name = $tag_name;
    }

    /**
     * @return string
     */
    public function getTagName(): string
    {
        return $this->tag_name;
    }
}
