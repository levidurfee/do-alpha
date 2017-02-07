<?php

namespace wappr\digitalocean\Requests\BlockStorage;

trait VolumeId
{
    /**
     * Required.
     *
     * @var
     */
    public $volume_id;

    /**
     * RetrieveBlockStorage constructor.
     *
     * @param $volume_id
     */
    public function __construct($volume_id)
    {
        $this->volume_id = $volume_id;
    }
}
