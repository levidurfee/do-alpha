<?php

namespace wappr\digitalocean\Contracts\BlockStorage;

interface DeleteBlockStorageContract
{
    /**
     * DeleteBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
