<?php
/**
 * Created by PhpStorm.
 * User: Levi
 * Date: 2/6/2017
 * Time: 2:51 PM
 */
namespace wappr\digitalocean\Contracts\BlockStorage;


/**
 * Class DeleteByNameBlockStorage
 * @package wappr\digitalocean\Requests\BlockStorage
 */
interface DeleteByNameBlockStorageContract
{
    /**
     * DeleteByNameBlockStorage constructor.
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region);
}
