<?php

namespace wappr\DigitalOcean\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Create\BlockStorageInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class CreateBlockStorageModel extends ModelMethods implements ModelInterface, BlockStorageInterface
{
    /**
     * @var int Required
     */
    protected $size_gigabytes;

    /**
     * @var string Required
     */
    protected $name;

    /**
     * @var string Optional
     */
    protected $description;

    /**
     * @var string Optional
     */
    protected $region;

    /**
     * @var string Optional
     */
    protected $snapshot_id;

    /**
     * BlockStorage constructor.
     *
     * @param int    $size_gigabytes
     * @param string $name
     */
    public function __construct($size_gigabytes, $name)
    {
        $this->size_gigabytes = $size_gigabytes;
        $this->name = $name;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->region = $region;
    }

    /**
     * @param string $snapshot_id
     */
    public function setSnapshotId(string $snapshot_id)
    {
        $this->snapshot_id = $snapshot_id;
    }
}
