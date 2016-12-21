<?php

namespace wappr\DigitalOcean\Models\Retrieve;

use wappr\DigitalOcean\Models\ModelMethods;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Models\Retrieve\RetrieveBlockStorageInterface;

/**
 * Class RetrieveBlockStorageRequest.
 */
class RetrieveBlockStorageRequest extends ModelMethods implements ModelInterface, RetrieveBlockStorageInterface
{
    /**
     * @var string
     */
    protected $id;

    /**
     * RetrieveBlockStorageInterface constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
