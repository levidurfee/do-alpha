<?php

namespace wappr\DigitalOcean\Models\Create;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Create\CreateBlockStorageInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class CreateBlockStorageRequest.
 */
class CreateBlockStorageRequest extends RequestModel implements ModelInterface, CreateBlockStorageInterface
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
     * CreateBlockStorageModel constructor.
     *
     * @param int    $size_gigabytes
     * @param string $name
     * @param string $description
     * @param string $region
     */
    public function __construct(int $size_gigabytes, string $name, string $description, string $region)
    {
        $this->size_gigabytes = $size_gigabytes;
        $this->name = $name;
        $this->description = $description;
        $this->region = $region;
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
