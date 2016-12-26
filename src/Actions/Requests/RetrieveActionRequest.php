<?php

namespace wappr\DigitalOcean\Actions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveActionInterface;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveActionRequest.
 */
class RetrieveActionRequest extends RequestModel implements ModelInterface, RetrieveActionInterface
{
    /**
     * @var int Required
     */
    protected $action_id;

    /**
     * RetrieveActionInterface constructor.
     *
     * @param $action_id int Required
     */
    public function __construct($action_id)
    {
        $this->action_id = $action_id;
    }

    /**
     * @return int
     */
    public function getActionId(): int
    {
        return $this->action_id;
    }
}
