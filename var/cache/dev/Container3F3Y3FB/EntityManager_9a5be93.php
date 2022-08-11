<?php

namespace Container3F3Y3FB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4d68e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercf6a0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8f155 = [
        
    ];

    public function getConnection()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getConnection', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getMetadataFactory', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getExpressionBuilder', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'beginTransaction', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getCache', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getCache();
    }

    public function transactional($func)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'transactional', array('func' => $func), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'wrapInTransaction', array('func' => $func), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'commit', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->commit();
    }

    public function rollback()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'rollback', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getClassMetadata', array('className' => $className), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'createQuery', array('dql' => $dql), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'createNamedQuery', array('name' => $name), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'createQueryBuilder', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'flush', array('entity' => $entity), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'clear', array('entityName' => $entityName), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->clear($entityName);
    }

    public function close()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'close', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->close();
    }

    public function persist($entity)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'persist', array('entity' => $entity), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'remove', array('entity' => $entity), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'refresh', array('entity' => $entity), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'detach', array('entity' => $entity), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'merge', array('entity' => $entity), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getRepository', array('entityName' => $entityName), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'contains', array('entity' => $entity), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getEventManager', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getConfiguration', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'isOpen', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getUnitOfWork', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getProxyFactory', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'initializeObject', array('obj' => $obj), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'getFilters', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'isFiltersStateClean', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'hasFilters', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return $this->valueHolder4d68e->hasFilters();
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

        $instance->initializercf6a0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4d68e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4d68e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4d68e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, '__get', ['name' => $name], $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        if (isset(self::$publicProperties8f155[$name])) {
            return $this->valueHolder4d68e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d68e;

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

        $targetObject = $this->valueHolder4d68e;
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
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d68e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4d68e;
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
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, '__isset', array('name' => $name), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d68e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4d68e;
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
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, '__unset', array('name' => $name), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d68e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4d68e;
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
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, '__clone', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        $this->valueHolder4d68e = clone $this->valueHolder4d68e;
    }

    public function __sleep()
    {
        $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, '__sleep', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;

        return array('valueHolder4d68e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf6a0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf6a0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercf6a0 && ($this->initializercf6a0->__invoke($valueHolder4d68e, $this, 'initializeProxy', array(), $this->initializercf6a0) || 1) && $this->valueHolder4d68e = $valueHolder4d68e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4d68e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4d68e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
