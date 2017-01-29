<?php

namespace wappr\digitalocean\Requests\Droplets;

use wappr\digitalocean\Contracts\RequestContract;
use wappr\digitalocean\Contracts\Droplets\CreateDropletContract;

/**
 * Class CreateDroplet.
 */
class CreateDroplet extends RequestContract implements CreateDropletContract
{
    public $name;

    public $region;

    public $size;

    public $image;

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
     * CreateDroplet constructor. These fields are required to create a droplet.
     *
     * @param string $name   The name of the droplet. It can be a FQDN
     * @param string $region The region the droplet will be created
     * @param string $size   The size of the droplet
     * @param string $image  The image you want installed
     */
    public function __construct($name, $region, $size, $image)
    {
        $this->name = $name;
        $this->region = $region;
        $this->size = $size;
        $this->image = $image;
    }

    /**
     * @param array $ssh_keys
     *
     * @return CreateDroplet
     */
    public function setSshKeys($ssh_keys)
    {
        $this->ssh_keys = $ssh_keys;

        return $this;
    }

    /**
     * @param bool $backups
     *
     * @return CreateDroplet
     */
    public function setBackups($backups)
    {
        $this->backups = $backups;

        return $this;
    }

    /**
     * @param bool $ipv6
     *
     * @return CreateDroplet
     */
    public function setIpv6($ipv6)
    {
        $this->ipv6 = $ipv6;

        return $this;
    }

    /**
     * @param bool $private_networking
     *
     * @return CreateDroplet
     */
    public function setPrivateNetworking($private_networking)
    {
        $this->private_networking = $private_networking;

        return $this;
    }

    /**
     * @param string $user_data
     *
     * @return CreateDroplet
     */
    public function setUserData($user_data)
    {
        $this->user_data = $user_data;

        return $this;
    }

    /**
     * @param bool $monitoring
     *
     * @return CreateDroplet
     */
    public function setMonitoring($monitoring)
    {
        $this->monitoring = $monitoring;

        return $this;
    }

    /**
     * @param array $volume
     *
     * @return CreateDroplet
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * @param array $tags
     *
     * @return CreateDroplet
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
