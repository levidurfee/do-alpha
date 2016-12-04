<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface DeleteImageInterface.
 */
interface DeleteImageInterface extends ModelInterface
{
    /**
     * DeleteImageInterface constructor.
     *
     * @param $image_id
     */
    public function __construct($image_id);

    /**
     * @return int
     */
    public function getImageId(): int;
}
