<?php

namespace wappr\DigitalOcean\Actions\Requests;

use wappr\DigitalOcean\Contracts\ModelInterface;
use wappr\DigitalOcean\Contracts\Actions\RetrieveActionContract;
use wappr\DigitalOcean\Contracts\Requests\RequestModel;

/**
 * Class RetrieveActionsRequest.
 */
class RetrieveActionsRequest extends RequestModel implements ModelInterface, RetrieveActionContract
{
    /**
     * @var int Required
     */
    protected $action_id;

    /**
     * RetrieveActionContract constructor.
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
