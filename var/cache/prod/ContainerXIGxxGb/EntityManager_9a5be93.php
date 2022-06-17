<?php

namespace ContainerXIGxxGb;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5c612 = null;
    private $initializer5f376 = null;
    private static $publicProperties9bbe2 = [
        
    ];
    public function getConnection()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getConnection', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getMetadataFactory', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getExpressionBuilder', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'beginTransaction', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getCache', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'transactional', array('func' => $func), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->transactional($func);
    }
    public function commit()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'commit', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->commit();
    }
    public function rollback()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'rollback', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getClassMetadata', array('className' => $className), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'createQuery', array('dql' => $dql), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'createNamedQuery', array('name' => $name), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'createQueryBuilder', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'flush', array('entity' => $entity), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'clear', array('entityName' => $entityName), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->clear($entityName);
    }
    public function close()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'close', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->close();
    }
    public function persist($entity)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'persist', array('entity' => $entity), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'remove', array('entity' => $entity), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'refresh', array('entity' => $entity), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'detach', array('entity' => $entity), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'merge', array('entity' => $entity), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'contains', array('entity' => $entity), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getEventManager', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getConfiguration', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'isOpen', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getUnitOfWork', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getProxyFactory', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'initializeObject', array('obj' => $obj), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'getFilters', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'isFiltersStateClean', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'hasFilters', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return $this->valueHolder5c612->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5f376 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5c612) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5c612 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5c612->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, '__get', ['name' => $name], $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        if (isset(self::$publicProperties9bbe2[$name])) {
            return $this->valueHolder5c612->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c612;
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
        $targetObject = $this->valueHolder5c612;
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
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c612;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5c612;
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
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, '__isset', array('name' => $name), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c612;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5c612;
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
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, '__unset', array('name' => $name), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c612;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5c612;
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
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, '__clone', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        $this->valueHolder5c612 = clone $this->valueHolder5c612;
    }
    public function __sleep()
    {
        $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, '__sleep', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
        return array('valueHolder5c612');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5f376 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5f376;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5f376 && ($this->initializer5f376->__invoke($valueHolder5c612, $this, 'initializeProxy', array(), $this->initializer5f376) || 1) && $this->valueHolder5c612 = $valueHolder5c612;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c612;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c612;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
