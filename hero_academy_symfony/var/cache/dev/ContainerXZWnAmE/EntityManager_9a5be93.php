<?php

namespace ContainerXZWnAmE;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62da5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbfadd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties539de = [
        
    ];

    public function getConnection()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getConnection', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getMetadataFactory', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getExpressionBuilder', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'beginTransaction', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getCache', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'transactional', array('func' => $func), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->transactional($func);
    }

    public function commit()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'commit', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->commit();
    }

    public function rollback()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'rollback', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getClassMetadata', array('className' => $className), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'createQuery', array('dql' => $dql), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'createNamedQuery', array('name' => $name), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'createQueryBuilder', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'flush', array('entity' => $entity), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'clear', array('entityName' => $entityName), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->clear($entityName);
    }

    public function close()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'close', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->close();
    }

    public function persist($entity)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'persist', array('entity' => $entity), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'remove', array('entity' => $entity), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'refresh', array('entity' => $entity), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'detach', array('entity' => $entity), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'merge', array('entity' => $entity), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'contains', array('entity' => $entity), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getEventManager', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getConfiguration', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'isOpen', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getUnitOfWork', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getProxyFactory', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'initializeObject', array('obj' => $obj), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'getFilters', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'isFiltersStateClean', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'hasFilters', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return $this->valueHolder62da5->hasFilters();
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

        $instance->initializerbfadd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62da5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62da5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62da5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, '__get', ['name' => $name], $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        if (isset(self::$publicProperties539de[$name])) {
            return $this->valueHolder62da5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62da5;

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

        $targetObject = $this->valueHolder62da5;
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
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62da5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62da5;
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
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, '__isset', array('name' => $name), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62da5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62da5;
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
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, '__unset', array('name' => $name), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62da5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62da5;
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
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, '__clone', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        $this->valueHolder62da5 = clone $this->valueHolder62da5;
    }

    public function __sleep()
    {
        $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, '__sleep', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;

        return array('valueHolder62da5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbfadd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbfadd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbfadd && ($this->initializerbfadd->__invoke($valueHolder62da5, $this, 'initializeProxy', array(), $this->initializerbfadd) || 1) && $this->valueHolder62da5 = $valueHolder62da5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62da5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62da5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
