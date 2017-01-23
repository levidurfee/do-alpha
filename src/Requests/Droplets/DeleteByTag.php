<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\DeleteByTagContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class DeleteByTag.
 */
class DeleteByTag extends RequestContract implements DeleteByTagContract
{
    /**
     * @var string
     */
    public $tag_name;

    /**
     * DeleteByTagContract constructor.
     *
     * @param $tag_name string
     */
    public function __construct($tag_name)
    {
        $this->tag_name = $tag_name;
    }
}
