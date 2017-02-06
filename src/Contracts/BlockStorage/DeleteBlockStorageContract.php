<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

use wappr\digitalocean\Contracts\Requests;

/**
 * Interface DeleteBlockStorageContract
 * @property $volume_id
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface DeleteBlockStorageContract extends Requests
{
    /**
     * DeleteBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
