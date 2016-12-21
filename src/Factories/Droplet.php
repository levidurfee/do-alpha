<?php

namespace wappr\DigitalOcean\Factories;

use wappr\DigitalOcean\Actions\Droplets;
use wappr\DigitalOcean\Client;
use wappr\DigitalOcean\Models\Create\CreateDropletRequest;

/**
 * Class Droplet.
 */
class Droplet
{
    /**
     * @param string $name
     * @param string $region
     * @param string $size
     * @param string $image
     *
     * @return mixed
     */
    public function create(string $name, string $region, string $size, string $image)
    {
        $droplet = new CreateDropletRequest($name, $region, $size, $image);

        return json_decode((new Droplets)->create(new Client, $droplet)->getBody()->getContents());
    }
}
