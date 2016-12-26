<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Tags\DeleteTagInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class DeleteTagRequest.
 */
class DeleteTagRequest extends RequestModel implements ModelInterface, DeleteTagInterface
{
    /**
     * @var string
     */
    protected $tag_name;

    /**
     * DeleteTagInterface constructor.
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
