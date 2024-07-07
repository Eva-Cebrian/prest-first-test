<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder75727 = null;
    private $initializer01f09 = null;
    private static $publicPropertiesf736c = [
        
    ];
    public function getConnection()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getConnection', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getMetadataFactory', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getExpressionBuilder', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'beginTransaction', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getCache', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getCache();
    }
    public function transactional($func)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'transactional', array('func' => $func), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'wrapInTransaction', array('func' => $func), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'commit', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->commit();
    }
    public function rollback()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'rollback', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getClassMetadata', array('className' => $className), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'createQuery', array('dql' => $dql), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'createNamedQuery', array('name' => $name), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'createQueryBuilder', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'flush', array('entity' => $entity), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'clear', array('entityName' => $entityName), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->clear($entityName);
    }
    public function close()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'close', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->close();
    }
    public function persist($entity)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'persist', array('entity' => $entity), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'remove', array('entity' => $entity), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'refresh', array('entity' => $entity), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'detach', array('entity' => $entity), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'merge', array('entity' => $entity), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getRepository', array('entityName' => $entityName), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'contains', array('entity' => $entity), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getEventManager', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getConfiguration', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'isOpen', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getUnitOfWork', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getProxyFactory', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'initializeObject', array('obj' => $obj), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'getFilters', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'isFiltersStateClean', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, 'hasFilters', array(), $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        return $this->valueHolder75727->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer01f09 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder75727) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder75727 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder75727->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer01f09 && ($this->initializer01f09->__invoke($valueHolder75727, $this, '__get', ['name' => $name], $this->initializer01f09) || 1) && $this->valueHolder75727 = $valueHolder75727;
        if (isset(self::$publicPropertiesf736c[$name])) {
            return $this->valueHolder75727->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
