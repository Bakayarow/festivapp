<?php

namespace ContainerNXEWlCv;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ebaf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4dd35 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf70c4 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getConnection', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getMetadataFactory', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getExpressionBuilder', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'beginTransaction', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getCache', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'transactional', array('func' => $func), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'commit', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->commit();
    }

    public function rollback()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'rollback', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getClassMetadata', array('className' => $className), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'createQuery', array('dql' => $dql), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'createNamedQuery', array('name' => $name), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'createQueryBuilder', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'flush', array('entity' => $entity), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'clear', array('entityName' => $entityName), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->clear($entityName);
    }

    public function close()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'close', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->close();
    }

    public function persist($entity)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'persist', array('entity' => $entity), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'remove', array('entity' => $entity), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'refresh', array('entity' => $entity), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'detach', array('entity' => $entity), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'merge', array('entity' => $entity), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'contains', array('entity' => $entity), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getEventManager', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getConfiguration', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'isOpen', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getUnitOfWork', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getProxyFactory', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'initializeObject', array('obj' => $obj), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'getFilters', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'isFiltersStateClean', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'hasFilters', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return $this->valueHolder8ebaf->hasFilters();
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

        $instance->initializer4dd35 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8ebaf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ebaf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ebaf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, '__get', ['name' => $name], $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        if (isset(self::$publicPropertiesf70c4[$name])) {
            return $this->valueHolder8ebaf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ebaf;

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

        $targetObject = $this->valueHolder8ebaf;
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
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ebaf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ebaf;
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
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, '__isset', array('name' => $name), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ebaf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ebaf;
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
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, '__unset', array('name' => $name), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ebaf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ebaf;
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
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, '__clone', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        $this->valueHolder8ebaf = clone $this->valueHolder8ebaf;
    }

    public function __sleep()
    {
        $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, '__sleep', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;

        return array('valueHolder8ebaf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4dd35 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4dd35;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4dd35 && ($this->initializer4dd35->__invoke($valueHolder8ebaf, $this, 'initializeProxy', array(), $this->initializer4dd35) || 1) && $this->valueHolder8ebaf = $valueHolder8ebaf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ebaf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ebaf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
