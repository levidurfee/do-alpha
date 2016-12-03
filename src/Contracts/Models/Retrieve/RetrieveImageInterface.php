<?php

namespace wappr\DigitalOcean\Contracts\Models\Retrieve;

interface RetrieveImageInterface
{
    /**
     * RetrieveImageInterface constructor.
     * @param $image_id
     */
    public function __construct($image_id);

    /**
     * @return int
     */
    public function getImageId(): int;
}
