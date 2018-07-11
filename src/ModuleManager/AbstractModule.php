<?php
namespace JiNexus\ModuleManager\ModuleManager;

use JiNexus\ModuleManager\Base\AbstractBase;

/**
 * Class AbstractModule
 * @package JiNexus\ModuleManager\ModuleManager
 */
abstract class AbstractModule extends AbstractBase implements ModuleInterface
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        return [];
    }
}