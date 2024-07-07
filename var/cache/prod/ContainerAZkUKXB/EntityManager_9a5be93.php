<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5f7b6 = null;
    private $initializer6213b = null;
    private static $publicProperties88953 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getConnection', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getMetadataFactory', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getExpressionBuilder', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'beginTransaction', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getCache', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'transactional', array('func' => $func), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'commit', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->commit();
    }
    public function rollback()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'rollback', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getClassMetadata', array('className' => $className), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'createQuery', array('dql' => $dql), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'createNamedQuery', array('name' => $name), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'createQueryBuilder', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'flush', array('entity' => $entity), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'clear', array('entityName' => $entityName), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->clear($entityName);
    }
    public function close()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'close', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->close();
    }
    public function persist($entity)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'persist', array('entity' => $entity), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'remove', array('entity' => $entity), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'refresh', array('entity' => $entity), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'detach', array('entity' => $entity), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'merge', array('entity' => $entity), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'contains', array('entity' => $entity), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getEventManager', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getConfiguration', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'isOpen', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getUnitOfWork', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getProxyFactory', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'initializeObject', array('obj' => $obj), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'getFilters', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'isFiltersStateClean', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'hasFilters', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return $this->valueHolder5f7b6->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6213b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5f7b6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f7b6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5f7b6->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, '__get', ['name' => $name], $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        if (isset(self::$publicProperties88953[$name])) {
            return $this->valueHolder5f7b6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7b6;
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
        $targetObject = $this->valueHolder5f7b6;
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
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7b6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5f7b6;
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
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, '__isset', array('name' => $name), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7b6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5f7b6;
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
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, '__unset', array('name' => $name), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f7b6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5f7b6;
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
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, '__clone', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        $this->valueHolder5f7b6 = clone $this->valueHolder5f7b6;
    }
    public function __sleep()
    {
        $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, '__sleep', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
        return array('valueHolder5f7b6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6213b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6213b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6213b && ($this->initializer6213b->__invoke($valueHolder5f7b6, $this, 'initializeProxy', array(), $this->initializer6213b) || 1) && $this->valueHolder5f7b6 = $valueHolder5f7b6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f7b6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f7b6;
    }
}
