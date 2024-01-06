<?php

namespace Hhansen06\Taktischezeichen\Icons;

class IconWrapper {

    protected $iconClass = null;

    public function __construct(String $iconType, int $width = null, int $height = null) {
        $iconType = ucfirst(strtolower($iconType));
        $class =  __NAMESPACE__  . '\\' . $iconType;
        if (class_exists($class)) $this->iconClass = new $class($width, $height);
    }

    public function __call($method,$args) {
        if (method_exists($this->iconClass, $method)) {
            return $this->iconClass->$method($args);
        }
        return false;
    }
}