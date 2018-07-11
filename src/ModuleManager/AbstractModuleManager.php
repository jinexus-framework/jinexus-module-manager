<?php
namespace JiNexus\ModuleManager\ModuleManager;

use JiNexus\ModuleManager\Base\AbstractBase;
use JiNexus\ModuleManager\Exception;

/**
 * Class AbstractModuleManager
 * @package JiNexus\ModuleManager\ModuleManager
 */
abstract class AbstractModuleManager extends AbstractBase implements ModuleManagerInterface
{
    /**
     * Modules
     *
     * @var array
     */
    protected $modules = [];

    public function __construct($modules = [])
    {
        $this->setModules($modules);
    }

    /**
     * Add Module
     *
     * @param string $module
     * @return bool
     */
    public function addModule($module = '')
    {
        if (! in_array($module, $this->modules)) {
            $this->modules[] = $module;

            return true;
        }

        return false;
    }

    /**
     * Get Modules
     *
     * @return array
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Set Modules
     *
     * @param array $modules
     */
    public function setModules($modules = [])
    {
        if ($modules) {
            foreach ($modules as $key => $module) {
                $this->modules[] = $module;
            }
        }
    }

    /**
     * Get Module config
     *
     * @param string $module
     * @return mixed
     * @throws Exception
     */
    public function getConfig($module = '')
    {
        if (! $module) {
            throw new Exception('Module is required');
        }

        $class = $module . '\Module';

        /** @var ModuleInterface $module */
        $module = new $class();

        return $module->getConfig();
    }
}