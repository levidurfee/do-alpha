<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Delete\DeleteBlockStorageInterface;
use wappr\DigitalOcean\Models\ModelMethods;

class DeleteBlockStorageModel extends ModelMethods implements ModelInterface, DeleteBlockStorageInterface
{
    protected $drive_id;

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
