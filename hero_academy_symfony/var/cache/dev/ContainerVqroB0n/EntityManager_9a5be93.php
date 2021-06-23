<?php

namespace ContainerVqroB0n;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd0490 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf1901 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties196a8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getConnection', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getMetadataFactory', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getExpressionBuilder', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'beginTransaction', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getCache', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'transactional', array('func' => $func), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->transactional($func);
    }

    public function commit()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'commit', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->commit();
    }

    public function rollback()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'rollback', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getClassMetadata', array('className' => $className), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'createQuery', array('dql' => $dql), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'createNamedQuery', array('name' => $name), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'createQueryBuilder', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'flush', array('entity' => $entity), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'clear', array('entityName' => $entityName), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->clear($entityName);
    }

    public function close()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'close', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->close();
    }

    public function persist($entity)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'persist', array('entity' => $entity), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'remove', array('entity' => $entity), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'refresh', array('entity' => $entity), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'detach', array('entity' => $entity), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'merge', array('entity' => $entity), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'contains', array('entity' => $entity), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getEventManager', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getConfiguration', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'isOpen', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getUnitOfWork', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getProxyFactory', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'initializeObject', array('obj' => $obj), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'getFilters', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'isFiltersStateClean', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'hasFilters', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return $this->valueHolderd0490->hasFilters();
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

        $instance->initializerf1901 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd0490) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd0490 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd0490->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, '__get', ['name' => $name], $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        if (isset(self::$publicProperties196a8[$name])) {
            return $this->valueHolderd0490->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0490;

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

        $targetObject = $this->valueHolderd0490;
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
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0490;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd0490;
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
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, '__isset', array('name' => $name), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0490;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd0490;
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
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, '__unset', array('name' => $name), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0490;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd0490;
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
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, '__clone', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        $this->valueHolderd0490 = clone $this->valueHolderd0490;
    }

    public function __sleep()
    {
        $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, '__sleep', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;

        return array('valueHolderd0490');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf1901 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf1901;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf1901 && ($this->initializerf1901->__invoke($valueHolderd0490, $this, 'initializeProxy', array(), $this->initializerf1901) || 1) && $this->valueHolderd0490 = $valueHolderd0490;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0490;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd0490;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
