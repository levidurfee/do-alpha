<?php
/**
 * Created by PhpStorm.
 * User: Levi
 * Date: 2/6/2017
 * Time: 2:55 PM
 */
namespace wappr\digitalocean\Contracts\BlockStorage;


/**
 * Class RetrieveBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
interface RetrieveBlockStorageContract
{
    /**
     * RetrieveBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}
