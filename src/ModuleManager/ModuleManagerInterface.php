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
     */
    public function __construct();

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
     * Add Module
     *
     * @param string $module
     * @return bool
     */
    public function addModule($module = '');

    /**
     * Get Module config
     *
     * @param string $module
     * @return mixed
     * @throws Exception
     */
    public function getConfig($module = '');
}