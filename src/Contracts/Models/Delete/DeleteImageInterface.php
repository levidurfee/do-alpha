<?php

namespace wappr\DigitalOcean\Contracts\Models\Delete;

interface DeleteImageInterface
{
    /**
     * DeleteImageInterface constructor.
     * @param $image_id
     */
    public function __construct($image_id);

    /**
     * @return int
     */
    public function getImageId(): int;
}
