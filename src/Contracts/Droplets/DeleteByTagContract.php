<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

interface DeleteByTagContract extends Requests
{
    /**
     * DeleteByTagContract constructor.
     *
     * @param $tag_name
     */
    public function __construct($tag_name);
}
