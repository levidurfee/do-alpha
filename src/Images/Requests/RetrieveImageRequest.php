<?php

namespace wappr\DigitalOcean\Images\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Images\RetrieveImageInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

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
