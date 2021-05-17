<?php

namespace ContainerDcFK4zk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb1fd7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer14770 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc97e6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getConnection', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getMetadataFactory', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getExpressionBuilder', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'beginTransaction', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getCache', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'transactional', array('func' => $func), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->transactional($func);
    }

    public function commit()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'commit', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->commit();
    }

    public function rollback()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'rollback', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getClassMetadata', array('className' => $className), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'createQuery', array('dql' => $dql), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'createNamedQuery', array('name' => $name), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'createQueryBuilder', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'flush', array('entity' => $entity), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'clear', array('entityName' => $entityName), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->clear($entityName);
    }

    public function close()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'close', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->close();
    }

    public function persist($entity)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'persist', array('entity' => $entity), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'remove', array('entity' => $entity), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'refresh', array('entity' => $entity), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'detach', array('entity' => $entity), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'merge', array('entity' => $entity), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'contains', array('entity' => $entity), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getEventManager', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getConfiguration', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'isOpen', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getUnitOfWork', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getProxyFactory', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'initializeObject', array('obj' => $obj), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'getFilters', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'isFiltersStateClean', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'hasFilters', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return $this->valueHolderb1fd7->hasFilters();
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

        $instance->initializer14770 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb1fd7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb1fd7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb1fd7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, '__get', ['name' => $name], $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        if (isset(self::$publicPropertiesc97e6[$name])) {
            return $this->valueHolderb1fd7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1fd7;

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

        $targetObject = $this->valueHolderb1fd7;
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
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1fd7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb1fd7;
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
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, '__isset', array('name' => $name), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1fd7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb1fd7;
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
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, '__unset', array('name' => $name), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb1fd7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb1fd7;
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
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, '__clone', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        $this->valueHolderb1fd7 = clone $this->valueHolderb1fd7;
    }

    public function __sleep()
    {
        $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, '__sleep', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;

        return array('valueHolderb1fd7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer14770 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer14770;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer14770 && ($this->initializer14770->__invoke($valueHolderb1fd7, $this, 'initializeProxy', array(), $this->initializer14770) || 1) && $this->valueHolderb1fd7 = $valueHolderb1fd7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb1fd7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb1fd7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
