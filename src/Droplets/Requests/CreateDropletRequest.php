<?php

namespace wappr\DigitalOcean\Droplets\Requests;

use wappr\DigitalOcean\Contracts\Droplets\CreateDropletInterface;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class CreateBlockStorageRequest.
 */
class CreateDropletRequest extends RequestModel implements ModelInterface, CreateDropletInterface
{
    /**
     * @var string Required
     */
    protected $name;

    /**
     * @var string Required
     */
    protected $region;

    /**
     * @var string Required
     */
    protected $size;

    /**
     * @var string Required
     */
    protected $image;

    /**
     * @var array Optional
     */
    protected $ssh_keys;

    /**
     * @var bool Optional
     */
    protected $backups;

    /**
     * @var bool Optional
     */
    protected $ipv6;

    /**
     * @var bool Optional
     */
    protected $private_networking;

    /**
     * @var string Optional
     */
    protected $user_data;

    /**
     * @var array Optional
     */
    protected $volumes;

    /**
     * @var array Optional
     */
    protected $tags;

    /**
     * @var bool Optional
     */
    protected $monitoring;

    /**
     * Droplet constructor.
     *
     * @param string $name
     * @param string $region
     * @param string $size
     * @param string $image
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
     */
    public function setSshKeys(array $ssh_keys)
    {
        $this->ssh_keys = $ssh_keys;
    }

    /**
     * @param bool $backups
     */
    public function setBackups(bool $backups)
    {
        $this->backups = $backups;
    }

    /**
     * @param bool $ipv6
     */
    public function setIpv6(bool $ipv6)
    {
        $this->ipv6 = $ipv6;
    }

    /**
     * @param bool $private_networking
     */
    public function setPrivateNetworking(bool $private_networking)
    {
        $this->private_networking = $private_networking;
    }

    /**
     * @param string $user_data
     */
    public function setUserData(string $user_data)
    {
        $this->user_data = $user_data;
    }

    /**
     * @param string $filename
     */
    public function setUserDataFromFile(string $filename)
    {
        $this->user_data = file_get_contents($filename);
    }

    /**
     * @param array $volumes
     */
    public function setVolumes(array $volumes)
    {
        $this->volumes = $volumes;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }

    /**
     * @param bool $monitoring
     */
    public function setMonitoring(bool $monitoring)
    {
        $this->monitoring = $monitoring;
    }
}
