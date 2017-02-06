<?php
/**
 * Created by PhpStorm.
 * User: Levi
 * Date: 2/6/2017
 * Time: 2:57 PM
 */
namespace wappr\digitalocean\Contracts\BlockStorage;

interface RetrieveByNameBlockStorageContract
{
    /**
     * RetrieveByNameBlockStorage constructor.
     * @param $drive_name
     * @param $region
     */
    public function __construct($drive_name, $region);
}
