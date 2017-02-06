<?php
/**
 * Created by PhpStorm.
 * User: Levi
 * Date: 2/6/2017
 * Time: 2:48 PM
 */
namespace wappr\digitalocean\Contracts\BlockStorage;


/**
 * Class DeleteBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
interface DeleteBlockStorageContract
{
    /**
     * DeleteBlockStorage constructor.
     * @param $volume_id
     */
    public function __construct($volume_id);
}