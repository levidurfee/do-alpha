<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\DeleteBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class DeleteBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
class DeleteBlockStorage extends RequestContract implements DeleteBlockStorageContract
{
    /**
     * @var
     */
    public $volume_id;

    /**
     * DeleteBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id)
    {
        $this->volume_id = $volume_id;
    }
}
