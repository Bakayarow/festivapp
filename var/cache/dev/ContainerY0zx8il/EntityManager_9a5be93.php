<?php

namespace ContainerY0zx8il;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder46745 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc45a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8ae66 = [
        
    ];

    public function getConnection()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getConnection', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getMetadataFactory', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getExpressionBuilder', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'beginTransaction', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getCache', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getCache();
    }

    public function transactional($func)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'transactional', array('func' => $func), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'wrapInTransaction', array('func' => $func), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'commit', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->commit();
    }

    public function rollback()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'rollback', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getClassMetadata', array('className' => $className), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'createQuery', array('dql' => $dql), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'createNamedQuery', array('name' => $name), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'createQueryBuilder', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'flush', array('entity' => $entity), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'clear', array('entityName' => $entityName), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->clear($entityName);
    }

    public function close()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'close', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->close();
    }

    public function persist($entity)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'persist', array('entity' => $entity), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'remove', array('entity' => $entity), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'refresh', array('entity' => $entity), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'detach', array('entity' => $entity), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'merge', array('entity' => $entity), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getRepository', array('entityName' => $entityName), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'contains', array('entity' => $entity), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getEventManager', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getConfiguration', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'isOpen', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getUnitOfWork', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getProxyFactory', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'initializeObject', array('obj' => $obj), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'getFilters', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'isFiltersStateClean', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'hasFilters', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return $this->valueHolder46745->hasFilters();
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

        $instance->initializercc45a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder46745) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder46745 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder46745->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, '__get', ['name' => $name], $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        if (isset(self::$publicProperties8ae66[$name])) {
            return $this->valueHolder46745->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46745;

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

        $targetObject = $this->valueHolder46745;
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
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46745;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46745;
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
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, '__isset', array('name' => $name), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46745;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder46745;
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
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, '__unset', array('name' => $name), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46745;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder46745;
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
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, '__clone', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        $this->valueHolder46745 = clone $this->valueHolder46745;
    }

    public function __sleep()
    {
        $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, '__sleep', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;

        return array('valueHolder46745');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercc45a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercc45a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercc45a && ($this->initializercc45a->__invoke($valueHolder46745, $this, 'initializeProxy', array(), $this->initializercc45a) || 1) && $this->valueHolder46745 = $valueHolder46745;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder46745;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder46745;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
