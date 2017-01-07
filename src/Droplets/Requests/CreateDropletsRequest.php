<?php

namespace wappr\DigitalOcean\Droplets\Requests;

use wappr\DigitalOcean\Contracts\Droplets\CreateDropletsContract;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class CreateDropletsRequest.
 */
class CreateDropletsRequest extends RequestModel implements ModelInterface, CreateDropletsContract
{
    /**
     * @var array
     */
    protected $names;

    /**
     * @var string
     */
    protected $region;

    /**
     * @var string
     */
    protected $size;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var array
     */
    protected $ssh_keys;

    /**
     * @var bool
     */
    protected $backups;

    /**
     * @var bool
     */
    protected $ipv6;

    /**
     * @var bool
     */
    protected $private_networking;

    /**
     * @var string
     */
    protected $user_data;

    /**
     * @var bool
     */
    protected $monitoring;

    /**
     * @var array
     */
    protected $tags;

    /**
     * CreateDropletsRequest constructor.
     *
     * @param array  $names
     * @param string $region
     * @param string $size
     * @param string $image
     */
    public function __construct(array $names, string $region, string $size, string $image)
    {
        $this->names = $names;
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
     * @param bool $monitoring
     */
    public function setMonitoring(bool $monitoring)
    {
        $this->monitoring = $monitoring;
    }

    /**
     * @param array $tags
     */
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }
}
