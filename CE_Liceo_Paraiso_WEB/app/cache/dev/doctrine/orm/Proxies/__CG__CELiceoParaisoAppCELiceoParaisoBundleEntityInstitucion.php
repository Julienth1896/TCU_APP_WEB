<?php

namespace Proxies\__CG__\CELiceoParaisoApp\CELiceoParaisoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Institucion extends \CELiceoParaisoApp\CELiceoParaisoBundle\Entity\Institucion implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'codigo', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'nombre', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'ubicacion', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'historia', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'encargados', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'telefono', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'descripcion', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'objetivos', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'mision', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'vision');
        }

        return array('__isInitialized__', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'codigo', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'nombre', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'ubicacion', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'historia', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'encargados', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'telefono', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'descripcion', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'objetivos', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'mision', '' . "\0" . 'CELiceoParaisoApp\\CELiceoParaisoBundle\\Entity\\Institucion' . "\0" . 'vision');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Institucion $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCodigo()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getCodigo();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigo', array());

        return parent::getCodigo();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setUbicacion($ubicacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUbicacion', array($ubicacion));

        return parent::setUbicacion($ubicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getUbicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUbicacion', array());

        return parent::getUbicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setHistoria($historia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHistoria', array($historia));

        return parent::setHistoria($historia);
    }

    /**
     * {@inheritDoc}
     */
    public function getHistoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHistoria', array());

        return parent::getHistoria();
    }

    /**
     * {@inheritDoc}
     */
    public function setEncargados($encargados)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEncargados', array($encargados));

        return parent::setEncargados($encargados);
    }

    /**
     * {@inheritDoc}
     */
    public function getEncargados()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEncargados', array());

        return parent::getEncargados();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', array($telefono));

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', array());

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjetivos($objetivos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjetivos', array($objetivos));

        return parent::setObjetivos($objetivos);
    }

    /**
     * {@inheritDoc}
     */
    public function getObjetivos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjetivos', array());

        return parent::getObjetivos();
    }

    /**
     * {@inheritDoc}
     */
    public function setMision($mision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMision', array($mision));

        return parent::setMision($mision);
    }

    /**
     * {@inheritDoc}
     */
    public function getMision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMision', array());

        return parent::getMision();
    }

    /**
     * {@inheritDoc}
     */
    public function setVision($vision)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVision', array($vision));

        return parent::setVision($vision);
    }

    /**
     * {@inheritDoc}
     */
    public function getVision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVision', array());

        return parent::getVision();
    }

}