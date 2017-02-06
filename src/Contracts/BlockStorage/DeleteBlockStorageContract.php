<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

/**
 * Interface DeleteBlockStorageContract
 * @property $volume_id
 * @package wappr\digitalocean\Contracts\BlockStorage
 */
interface DeleteBlockStorageContract
{
    /**
     * DeleteBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
