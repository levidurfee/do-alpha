<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface CreateDropletContract.
 *
 * @property $name
 * @property $region
 * @property $size
 * @property $image
 * @property $ssh_keys
 * @property $backups
 * @property $ipv6
 * @property $private_networking
 * @property $user_data
 * @property $monitoring
 * @property $volume
 * @property $tags
 */
interface CreateDropletContract extends Requests
{
    public function __construct($name, $region, $size, $image);
}
