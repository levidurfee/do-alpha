<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\Droplets\CreateMultipleContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class CreateMultiple
 *
 * This request is for creating multiple droplets.
 *
 * @package wappr\digitalocean\Requests\Droplets
 */
class CreateMultiple extends RequestContract implements CreateMultipleContract
{
    /* These are required */

    /**
     * @var array
     */
    public $names;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $image;

    /* These are optional */

    /**
     * @var array An array of SSH key IDs you want installed on the droplet
     */
    public $ssh_keys;

    /**
     * @var bool Set to true if you want backups enabled on the droplet
     */
    public $backups;

    /**
     * @var bool Set to true if you want IPv6 enabled on the droplet
     */
    public $ipv6;

    /**
     * @var bool Set to true if you want private networking enabled on the droplet
     */
    public $private_networking;

    /**
     * @var string A cloud-init file that will be ran on the droplet after it's created
     */
    public $user_data;

    /**
     * @var bool A boolean indicating whether to install the DigitalOcean agent for monitoring
     */
    public $monitoring;

    /**
     * @var array An array of unique string identifiers of each volume you want attached to the droplet
     */
    public $volume;

    /**
     * @var array An array of tags you want associated with the droplet
     */
    public $tags;

    /**
     * CreateDroplet constructor. These fields are required to create a multiple droplets.
     *
     * @param array $names   The names of the droplets.
     * @param string $region The region the droplet will be created
     * @param string $size   The size of the droplet
     * @param string $image  The image you want installed
     */
    public function __construct($names, $region, $size, $image)
    {
        $this->names = $names;
        $this->region = $region;
        $this->size = $size;
        $this->image = $image;
    }
}
