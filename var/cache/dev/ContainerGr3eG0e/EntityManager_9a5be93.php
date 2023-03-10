<?php

namespace ContainerGr3eG0e;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder10608 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer71fdc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties878c9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getConnection', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getMetadataFactory', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getExpressionBuilder', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'beginTransaction', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getCache', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getCache();
    }

    public function transactional($func)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'transactional', array('func' => $func), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'wrapInTransaction', array('func' => $func), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'commit', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->commit();
    }

    public function rollback()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'rollback', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getClassMetadata', array('className' => $className), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'createQuery', array('dql' => $dql), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'createNamedQuery', array('name' => $name), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'createQueryBuilder', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'flush', array('entity' => $entity), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'clear', array('entityName' => $entityName), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->clear($entityName);
    }

    public function close()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'close', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->close();
    }

    public function persist($entity)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'persist', array('entity' => $entity), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'remove', array('entity' => $entity), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'refresh', array('entity' => $entity), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'detach', array('entity' => $entity), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'merge', array('entity' => $entity), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getRepository', array('entityName' => $entityName), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'contains', array('entity' => $entity), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getEventManager', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getConfiguration', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'isOpen', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getUnitOfWork', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getProxyFactory', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'initializeObject', array('obj' => $obj), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'getFilters', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'isFiltersStateClean', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'hasFilters', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return $this->valueHolder10608->hasFilters();
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

        $instance->initializer71fdc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder10608) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder10608 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder10608->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, '__get', ['name' => $name], $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        if (isset(self::$publicProperties878c9[$name])) {
            return $this->valueHolder10608->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10608;

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

        $targetObject = $this->valueHolder10608;
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
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10608;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder10608;
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
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, '__isset', array('name' => $name), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10608;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder10608;
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
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, '__unset', array('name' => $name), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder10608;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder10608;
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
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, '__clone', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        $this->valueHolder10608 = clone $this->valueHolder10608;
    }

    public function __sleep()
    {
        $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, '__sleep', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;

        return array('valueHolder10608');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer71fdc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer71fdc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer71fdc && ($this->initializer71fdc->__invoke($valueHolder10608, $this, 'initializeProxy', array(), $this->initializer71fdc) || 1) && $this->valueHolder10608 = $valueHolder10608;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder10608;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder10608;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
