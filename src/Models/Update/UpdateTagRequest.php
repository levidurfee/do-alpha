<?php

namespace wappr\DigitalOcean\Models\Update;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Update\UpdateTagInterface;
use wappr\DigitalOcean\Models\RequestModel;

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
     * @param string $tag_name
     * @param string $name
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
