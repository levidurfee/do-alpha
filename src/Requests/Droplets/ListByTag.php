<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\ListByTagContract;
use wappr\digitalocean\Contracts\RequestContract;

class ListByTag extends RequestContract implements ListByTagContract
{
    /**
     * @var string
     */
    public $tag_name;

    /**
     * ListByTagContract constructor.
     *
     * @param $tag_name
     */
    public function __construct($tag_name)
    {
        $this->tag_name = $tag_name;
    }
}
