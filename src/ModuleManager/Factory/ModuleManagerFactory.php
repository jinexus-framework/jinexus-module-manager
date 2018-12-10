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
     * @return ModuleManager
     */
    public static function build()
    {
        return new ModuleManager();
    }
}