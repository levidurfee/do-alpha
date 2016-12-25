<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageByNameInterface;
use wappr\DigitalOcean\Models\RequestModel;

/**
 * Class RetrieveBlockStorageByNameRequest
 * @package wappr\DigitalOcean\Models\Retrieve
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
