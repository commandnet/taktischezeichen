<?php

namespace hhansen06\Taktischezeichen;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Texts\SVGText;
use SVG\SVG;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Shapes\SVGPath;
use hhansen06\Taktischezeichen\Fahrzeug;
use SVG\Nodes\Shapes\SVGPolyline;

class Person
{
    var $fontfamiliy = "Arial";

    var $image;
    var $doc;
    var $width = 400;
    var $height = 400;
    function __construct()
    {
        $this->image = new SVG($this->width, $this->height);
        $this->doc = $this->image->getDocument();
        $d = "
                M 200 10
                L 10  200
                L 200 390
                L 390 200
                L 200 10
                ";
        $poli = new SVGPath($d);
        $poli->setStyle('fill', "none");
        $poli->setStyle('stroke', "#000");
        $poli->setStyle('stroke-width', '4');
        $this->doc->addChild($poli);
    }

    function zustand($typ)
    {
        switch ($typ) {
            case person_verletzt:
                $d = "
                M 200 10
                L 200 390
                ";
                $poli = new SVGPath($d);
                $poli->setStyle('fill', "none");
                $poli->setStyle('stroke', "#000");
                $poli->setStyle('stroke-width', '4');
                $this->doc->addChild($poli);
                break;

            case person_tod:
                $d = "
                M 200 10
                L 200 390
                L 200 70
                L 140 70
                L 260 70
                ";
                $poli = new SVGPath($d);
                $poli->setStyle('fill', "none");
                $poli->setStyle('stroke', "#000");
                $poli->setStyle('stroke-width', '4');
                $this->doc->addChild($poli);
                break;
            case person_vermisst:
                $d = "
                    M 180 10
                    L 7 180
                    ";
                $poli = new SVGPath($d);
                $poli->setStyle('fill', "none");
                $poli->setStyle('stroke', "#000");
                $poli->setStyle('stroke-width', '4');
                $this->doc->addChild($poli);
                $d = "
                M 220 10
                L 392 180
                ";
                $poli = new SVGPath($d);
                $poli->setStyle('fill', "none");
                $poli->setStyle('stroke', "#000");
                $poli->setStyle('stroke-width', '4');
                $this->doc->addChild($poli);
                break;
        }
    }

    function render()
    {
        header('Content-Type: image/svg+xml');
        echo $this->image;
    }
}
