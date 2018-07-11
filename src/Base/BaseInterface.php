<?php
namespace JiNexus\ModuleManager\Base;

/**
 * Interface BaseInterface
 * @package JiNexus\ModuleManager\Base
 */
interface BaseInterface
{
    /**
     * Getters and Setters
     *
     * @param $property
     * @param array $arguments
     * @return mixed
     */
    public function __call($property, array $arguments);
}
