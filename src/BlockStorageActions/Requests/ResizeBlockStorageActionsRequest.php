<?php

namespace wappr\DigitalOcean\BlockStorageActions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\BlockStorageActions\ResizeBlockStorageActionsInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class ResizeBlockStorageActionsRequest.
 */
class ResizeBlockStorageActionsRequest extends RequestModel implements ModelInterface, ResizeBlockStorageActionsInterface
{
    /**
     * @var string
     */
    protected $type = 'resize';

    /**
     * @var string
     */
    protected $volume_id;

    /**
     * @var int
     */
    protected $size_gigabytes;

    /**
     * @var string
     */
    protected $region;

    /**
     * ResizeBlockStorageActionsInterface constructor.
     *
     * @param string $volume_id
     * @param int    $size_gigabytes
     * @param string $region
     */
    public function __construct(string $volume_id, int $size_gigabytes, string $region)
    {
        $this->volume_id = $volume_id;
        $this->size_gigabytes = $size_gigabytes;
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getVolumeId(): string
    {
        return $this->volume_id;
    }
}
