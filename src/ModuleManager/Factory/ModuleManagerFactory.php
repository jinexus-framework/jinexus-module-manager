<?php
namespace JiNexus\ModuleManager\ModuleManager\Factory;

use JiNexus\ModuleManager\Factory\AbstractFactory;
use JiNexus\ModuleManager\ModuleManager\ModuleManager;

/**
 * Class ModuleManagerFactory
 * @package JiNexus\ModuleManager\ModuleManager\Factory
 */
class ModuleManagerFactory extends AbstractFactory
{
    /**
     * @param array $modules
     * @return ModuleManager
     */
    public static function build($modules = [])
    {
        return new ModuleManager($modules);
    }
}