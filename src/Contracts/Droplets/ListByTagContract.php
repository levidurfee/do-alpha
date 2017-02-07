<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

interface ListByTagContract extends Requests
{
    /**
     * ListByTagContract constructor.
     *
     * @param $tag_name
     */
    public function __construct($tag_name);
}
