<?php

namespace wappr\DigitalOcean\Models\Update;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Update\UpdateImageInterface;
use wappr\DigitalOcean\Models\ModelMethods;

/**
 * Class UpdateImageModel.
 */
class UpdateImageModel extends ModelMethods implements ModelInterface, UpdateImageInterface
{
    /**
     * @var int Required
     */
    protected $image_id;

    /**
     * @var int Required
     */
    protected $name;

    /**
     * UpdateImageModel constructor.
     *
     * @param $image_id int Required
     * @param $name int Required
     */
    public function __construct($image_id, $name)
    {
        $this->image_id = $image_id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getImageId(): int
    {
        return $this->image_id;
    }
}
