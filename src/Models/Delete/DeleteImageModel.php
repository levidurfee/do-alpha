<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteImageInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class DeleteImageModel extends ModelMethods implements ModelInterface, DeleteImageInterface
{
    /**
     * @var int Required
     */
    protected $image_id;

    /**
     * DeleteImageModel constructor.
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
