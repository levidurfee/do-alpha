<?php

namespace wappr\DigitalOcean\Contracts\Models\Create;

interface CreateDropletInterface
{
    /**
     * Droplet constructor.
     *
     * @param string $name
     * @param string $region
     * @param string $size
     * @param string $image
     */
    public function __construct($name, $region, $size, $image);

    /**
     * @param array $ssh_keys
     */
    public function setSshKeys(array $ssh_keys);

    /**
     * @param bool $backups
     */
    public function setBackups(bool $backups);

    /**
     * @param bool $ipv6
     */
    public function setIpv6(bool $ipv6);

    /**
     * @param bool $private_networking
     */
    public function setPrivateNetworking(bool $private_networking);

    /**
     * @param string $user_data
     */
    public function setUserData(string $user_data);

    /**
     * @param array $volumes
     */
    public function setVolumes(array $volumes);

    /**
     * @param array $tags
     */
    public function setTags(array $tags);
}
