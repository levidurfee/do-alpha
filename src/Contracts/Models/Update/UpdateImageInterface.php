<?php

namespace wappr\DigitalOcean\Contracts\Models\Update;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface UpdateImageInterface.
 */
interface UpdateImageInterface extends ModelInterface
{
    /**
     * UpdateImageInterface constructor.
     *
     * @param $image_id int
     * @param $name string
     */
    public function __construct($image_id, $name);

    /**
     * @return int
     */
    public function getImageId(): int;
}
