<?php

namespace wappr\digitalocean\Contracts\Droplets;

interface ListByTagContract
{
    /**
     * ListByTagContract constructor.
     *
     * @param $tag_name
     */
    public function __construct($tag_name);
}
