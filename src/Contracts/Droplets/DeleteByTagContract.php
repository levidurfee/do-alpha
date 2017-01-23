<?php

namespace wappr\digitalocean\Contracts\Droplets;

/**
 * Interface DeleteByTagContract.
 */
interface DeleteByTagContract
{
    /**
     * DeleteByTagContract constructor.
     *
     * @param $tag_name
     */
    public function __construct($tag_name);
}
