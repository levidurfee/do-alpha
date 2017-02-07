<?php

namespace wappr\digitalocean\Contracts\Droplets;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface CreateMultipleContract.
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
interface CreateMultipleContract extends Requests
{
    public function __construct($names, $region, $size, $image);
}
