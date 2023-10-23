<?php

namespace ContainerVnods1k;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8526f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2b01d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesde899 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getConnection', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getMetadataFactory', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getExpressionBuilder', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'beginTransaction', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getCache', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'transactional', array('func' => $func), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'commit', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->commit();
    }

    public function rollback()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'rollback', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getClassMetadata', array('className' => $className), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'createQuery', array('dql' => $dql), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'createNamedQuery', array('name' => $name), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'createQueryBuilder', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'flush', array('entity' => $entity), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'clear', array('entityName' => $entityName), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->clear($entityName);
    }

    public function close()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'close', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->close();
    }

    public function persist($entity)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'persist', array('entity' => $entity), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'remove', array('entity' => $entity), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'detach', array('entity' => $entity), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'merge', array('entity' => $entity), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'contains', array('entity' => $entity), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getEventManager', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getConfiguration', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'isOpen', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getUnitOfWork', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getProxyFactory', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'initializeObject', array('obj' => $obj), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'getFilters', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'isFiltersStateClean', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'hasFilters', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return $this->valueHolder8526f->hasFilters();
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

        $instance->initializer2b01d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder8526f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8526f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8526f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, '__get', ['name' => $name], $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        if (isset(self::$publicPropertiesde899[$name])) {
            return $this->valueHolder8526f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8526f;

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

        $targetObject = $this->valueHolder8526f;
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
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8526f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8526f;
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
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, '__isset', array('name' => $name), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8526f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8526f;
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
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, '__unset', array('name' => $name), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8526f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8526f;
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
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, '__clone', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        $this->valueHolder8526f = clone $this->valueHolder8526f;
    }

    public function __sleep()
    {
        $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, '__sleep', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;

        return array('valueHolder8526f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2b01d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2b01d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2b01d && ($this->initializer2b01d->__invoke($valueHolder8526f, $this, 'initializeProxy', array(), $this->initializer2b01d) || 1) && $this->valueHolder8526f = $valueHolder8526f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8526f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8526f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
