<?php

namespace wappr\digitalocean\Requests\BlockStorage;

use wappr\digitalocean\Contracts\BlockStorage\RetrieveBlockStorageContract;
use wappr\digitalocean\Contracts\RequestContract;

/**
 * Class RetrieveBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
class RetrieveBlockStorage extends RequestContract implements RetrieveBlockStorageContract
{
    /**
     * Required
     *
     * @var
     */
    public $volume_id;

    /**
     * RetrieveBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id)
    {
        $this->volume_id = $volume_id;
    }
}
