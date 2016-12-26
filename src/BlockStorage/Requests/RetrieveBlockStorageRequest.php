<?php

namespace wappr\DigitalOcean\BlockStorage\Requests;

use wappr\DigitalOcean\Contracts\Requests\RequestModel;
use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorage\RetrieveBlockStorageInterface;

/**
 * Class RetrieveBlockStorageRequest.
 */
class RetrieveBlockStorageRequest extends RequestModel implements ModelInterface, RetrieveBlockStorageInterface
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
