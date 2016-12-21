<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteImageInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class DeleteImageRequest.
 */
class DeleteImageRequest extends RequestModel implements ModelInterface, DeleteImageInterface
{
    /**
     * @var int Required
     */
    protected $image_id;

    /**
     * DeleteImageRequest constructor.
     *
     * @param $image_id int Required
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
