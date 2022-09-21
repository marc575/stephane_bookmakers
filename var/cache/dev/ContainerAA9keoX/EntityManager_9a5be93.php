<?php

namespace ContainerAA9keoX;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder340bd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfdab4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties58541 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getConnection', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getMetadataFactory', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getExpressionBuilder', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'beginTransaction', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getCache', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'transactional', array('func' => $func), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->transactional($func);
    }

    public function commit()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'commit', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->commit();
    }

    public function rollback()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'rollback', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getClassMetadata', array('className' => $className), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'createQuery', array('dql' => $dql), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'createNamedQuery', array('name' => $name), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'createQueryBuilder', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'flush', array('entity' => $entity), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'clear', array('entityName' => $entityName), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->clear($entityName);
    }

    public function close()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'close', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->close();
    }

    public function persist($entity)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'persist', array('entity' => $entity), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'remove', array('entity' => $entity), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'refresh', array('entity' => $entity), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'detach', array('entity' => $entity), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'merge', array('entity' => $entity), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'contains', array('entity' => $entity), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getEventManager', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getConfiguration', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'isOpen', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getUnitOfWork', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getProxyFactory', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'initializeObject', array('obj' => $obj), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'getFilters', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'isFiltersStateClean', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'hasFilters', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return $this->valueHolder340bd->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfdab4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder340bd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder340bd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder340bd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, '__get', ['name' => $name], $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        if (isset(self::$publicProperties58541[$name])) {
            return $this->valueHolder340bd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder340bd;

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

        $targetObject = $this->valueHolder340bd;
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
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder340bd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder340bd;
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
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, '__isset', array('name' => $name), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder340bd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder340bd;
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
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, '__unset', array('name' => $name), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder340bd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder340bd;
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
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, '__clone', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        $this->valueHolder340bd = clone $this->valueHolder340bd;
    }

    public function __sleep()
    {
        $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, '__sleep', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;

        return array('valueHolder340bd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfdab4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfdab4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfdab4 && ($this->initializerfdab4->__invoke($valueHolder340bd, $this, 'initializeProxy', array(), $this->initializerfdab4) || 1) && $this->valueHolder340bd = $valueHolder340bd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder340bd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder340bd;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
