<?php
namespace JiNexus\ModuleManager\ModuleManager;

use JiNexus\ModuleManager\Base\BaseInterface;
use JiNexus\ModuleManager\Exception;

/**
 * Interface ModuleManagerInterface
 * @package JiNexus\ModuleManager\ModuleManager
 */
interface ModuleManagerInterface extends BaseInterface
{
    /**
     * ModuleManagerInterface constructor
     *
     * @param $appConfig
     */
    public function __construct($appConfig);

    /**
     * Add Module
     *
     * @param string $module
     * @return bool
     */
    public function addModule($module = '');

    /**
     * Get Modules
     *
     * @return mixed
     */
    public function getModules();

    /**
     * Set Modules
     *
     * @param array $modules
     */
    public function setModules($modules = []);

    /**
     * Get Module config
     *
     * @param string $module
     * @return mixed
     * @throws Exception
     */
    public function getConfig($module = '');
}