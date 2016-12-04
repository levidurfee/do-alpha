<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface RetrieveImageInterface.
 */
interface RetrieveImageInterface extends ModelInterface
{
    /**
     * RetrieveImageInterface constructor.
     *
     * @param $image_id
     */
    public function __construct($image_id);

    /**
     * @return int
     */
    public function getImageId(): int;
}
