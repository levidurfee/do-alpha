<?php

namespace wappr\DigitalOcean\Models\Delete;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\DeleteBlockStorageByNameInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class DeleteBlockStorageByNameRequest.
 */
class DeleteBlockStorageByNameRequest extends RequestModel implements ModelInterface, DeleteBlockStorageByNameInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $region;

    /**
     * DeleteBlockStorageByNameInterface constructor.
     *
     * @param string $name
     * @param string $region
     */
    public function __construct(string $name, string $region)
    {
        $this->name = $name;
        $this->region = $region;
    }

    /**
     * @return array
     */
    public function getQuery(): array
    {
        return ['name' => $this->name, 'region' => $this->region];
    }
}
