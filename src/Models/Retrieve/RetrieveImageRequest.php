<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveImageInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class RetrieveImageRequest.
 */
class RetrieveImageRequest extends RequestModel implements ModelInterface, RetrieveImageInterface
{
    /**
     * @var int Required
     */
    protected $image_id;

    /**
     * RetrieveImageRequest constructor.
     *
     * @param $image_id int
     */
    public function __construct($image_id)
    {
        $this->image_id = $image_id;
    }

    /**
     * @return int
     */
    public function getImageId(): int
    {
        return $this->image_id;
    }
}
