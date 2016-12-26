<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\DeleteBlockStorageInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class DeleteBlockStorageRequest.
 */
class DeleteBlockStorageRequest extends RequestModel implements ModelInterface, DeleteBlockStorageInterface
{
    /**
     * @var string
     */
    protected $drive_id;

    /**
     * DeleteBlockStorageRequest constructor.
     *
     * @param string $drive_id
     */
    public function __construct(string $drive_id)
    {
        $this->drive_id = $drive_id;
    }

    /**
     * @return string
     */
    public function getDriveId(): string
    {
        return $this->drive_id;
    }
}
