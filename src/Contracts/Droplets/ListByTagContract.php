<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface ListByTagContract.
 *
 * @property $tag_name
 */
interface ListByTagContract extends Requests
{
    /**
     * ListByTagContract constructor.
     *
     * @param $tag_name
     */
    public function __construct($tag_name);
}
