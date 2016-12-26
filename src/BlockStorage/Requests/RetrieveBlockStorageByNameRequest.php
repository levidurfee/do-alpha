<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveBlockStorageByNameInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveBlockStorageByNameRequest.
 */
class RetrieveBlockStorageByNameRequest extends RequestModel implements ModelInterface, RetrieveBlockStorageByNameInterface
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
     * RetrieveBlockStorageByNameInterface constructor.
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
