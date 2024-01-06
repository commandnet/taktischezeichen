<?php

namespace Hhansen06\Taktischezeichen\Icons;

abstract class IconAbstract
{

    public $width;
    public $height;

    abstract public function render();

}