<?php

namespace wappr\DigitalOcean\Contracts\Droplets;

use wappr\DigitalOcean\Contracts\ModelInterface;

/**
 * Interface CreateDropletsContract.
 */
interface CreateDropletsContract extends ModelInterface
{
    public function __construct(array $names, string $region, string $size, string $image);

    public function setSshKeys(array $ssh_keys);

    public function setBackups(bool $backups);

    public function setIpv6(bool $ipv6);

    public function setPrivateNetworking(bool $private_networking);

    public function setUserData(string $user_data);

    public function setMonitoring(bool $monitoring);

    public function setTags(array $tags);
}
