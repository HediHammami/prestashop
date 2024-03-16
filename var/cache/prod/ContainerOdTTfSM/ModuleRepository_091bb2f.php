<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb9b75 = null;
    private $initializer64783 = null;
    private static $publicProperties8c466 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'getList', array(), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'getInstalledModules', array(), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'getMustBeConfiguredModules', array(), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'getUpgradableModules', array(), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'setActionUrls', array('collection' => $collection), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return $this->valueHolderb9b75->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer64783 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderb9b75) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderb9b75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderb9b75->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, '__get', ['name' => $name], $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        if (isset(self::$publicProperties8c466[$name])) {
            return $this->valueHolderb9b75->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9b75;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb9b75;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9b75;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb9b75;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, '__isset', array('name' => $name), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9b75;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb9b75;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, '__unset', array('name' => $name), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb9b75;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb9b75;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, '__clone', array(), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        $this->valueHolderb9b75 = clone $this->valueHolderb9b75;
    }
    public function __sleep()
    {
        $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, '__sleep', array(), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
        return array('valueHolderb9b75');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer64783 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer64783;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer64783 && ($this->initializer64783->__invoke($valueHolderb9b75, $this, 'initializeProxy', array(), $this->initializer64783) || 1) && $this->valueHolderb9b75 = $valueHolderb9b75;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb9b75;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb9b75;
    }
}
