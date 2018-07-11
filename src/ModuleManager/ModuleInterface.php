<?php
namespace JiNexus\ModuleManager\ModuleManager;

use JiNexus\ModuleManager\Base\BaseInterface;

/**
 * Interface ModuleInterface
 * @package JiNexus\ModuleManager\ModuleManager
 */
interface ModuleInterface extends BaseInterface
{
    /**
     * @return mixed
     */
    public function getConfig();
}