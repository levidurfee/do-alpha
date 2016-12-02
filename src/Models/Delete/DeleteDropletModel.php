<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\Models\Delete\DeleteDropletInterface;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class DeleteDropletModel extends ModelMethods implements ModelInterface, DeleteDropletInterface
{
    /**
     * @var int Required
     */
    protected $droplet_id;

    public function __construct($droplet_id)
    {
        $this->droplet_id = $droplet_id;
    }

    /**
     * @return int
     */
    public function getDropletId(): int
    {
        return $this->droplet_id;
    }
}
