<?php

namespace Hhansen06\Taktischezeichen\Icons;

use SVG\SVG;

trait IconTrait
{

    public $fontfamiliy = "Arial";

    public $image;
    public $doc;

    public function __construct($width = null, $height = null) {
        if ($width) $this->width = $width;
        if ($height) $this->height = $height;

        $this->image = new SVG($this->width, $this->height);
        $this->doc = $this->image->getDocument();
    }

    function render() {
        header('Content-Type: image/svg+xml');
        echo $this->image;
    }
}

