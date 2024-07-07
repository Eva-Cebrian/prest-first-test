<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder75727 = null;
    private $initializer01f09 = null;
    private static $publicPropertiesf736c = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getList', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getInstalledModules', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getMustBeConfiguredModules', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getUpgradableModules', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'setActionUrls', array('collection' => $collection), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer01f09 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder75727) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder75727 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder75727->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, '__get', ['name' => $name], $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        if (isset(self::$publicPropertiesf736c[$name])) {
            return $this->valueHolder75727->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75727;
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
        $targetObject = $this->valueHolder75727;
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
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75727;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder75727;
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
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, '__isset', array('name' => $name), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75727;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder75727;
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
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, '__unset', array('name' => $name), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75727;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder75727;
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
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, '__clone', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        $this->valueHolder75727 = clone $this->valueHolder75727;
    }
    public function __sleep()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, '__sleep', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return array('valueHolder75727');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer01f09 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer01f09;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'initializeProxy', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder75727;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder75727;
    }
}
