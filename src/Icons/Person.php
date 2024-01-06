<?php

namespace Hhansen06\Taktischezeichen\Icons;

use SVG\Nodes\Shapes\SVGPath;


class Person extends IconAbstract
{
    use IconTrait;

    const PERSON_VERLETZT   = 1;
    const PERSON_TOD        = 2;
    const PERSON_VERMISST   = 3;

    public $fontfamiliy = "Arial";
    public $width = 400;
    public $height = 400;

    public function zustand($typ)
    {
        switch ($typ) {
            case 1:
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

            case 2:
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
            case 3:
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
}
