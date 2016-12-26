<?php

namespace wappr\DigitalOcean\Contracts\Images;

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
