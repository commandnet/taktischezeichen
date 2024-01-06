<?php

namespace Hhansen06\Taktischezeichen;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGCircle;
use Hhansen06\Taktischezeichen\Icons\Icons\Fahrzeugarten;
use SVG\Nodes\Shapes\SVGLine;
use SVG\Nodes\Texts\SVGText;

class Fahrzeug extends Taktischezeichen
{
    function basisshape()
    {
        $offset = 10;

        $d = "
                M 10 300
                L 390 300
                L 390 70
                Q 200 140 10 70
                L 10 300";

        $poli = new SVGPath($d);
        $poli->setStyle('fill', $this->backcolor);
        $poli->setStyle('stroke', $this->fontcolor);
        $poli->setStyle('stroke-width', '4');
        $this->doc->addChild($poli);
    }
    function SetSchlauchwagen($name)
    {
        $this->SetLoescheinheit($name);
        $d = "
                M 40 150
                Q 60 130 80 150
                T 120 150
                T 160 150
                ";

        $poli = new SVGPath($d);
        $poli->setStyle('fill', "none");
        $poli->setStyle('stroke', $this->fontcolor);
        $poli->setStyle('stroke-width', '4');
        $this->doc->addChild($poli);
    }
    function SetDrehleiter($name)
    {
        $d = "
        M 200 280
        L 300 200
        L 350 200
        L 350 150
        L 300 150
        L 300 200
        ";

        $poli = new SVGPath($d);
        $poli->setStyle('fill', "none");
        $poli->setStyle('stroke', $this->fontcolor);
        $poli->setStyle('stroke-width', '4');
        $this->doc->addChild($poli);

        $tet = new SVGText($name, 20, 200);
        $tet->setStyle('fill', $this->fontcolor);
        $tet->setStyle("font-family", $this->fontfamiliy);
        $tet->setStyle("font-size", "xxx-large");

        $this->doc->addChild($tet);
    }
    function SetRuestwagen($name)
    {
        $d = "
        M 50 150
        L 100 170
        L 100 190
        L 50 210
        L 100 190
        L 100 210
        L 180 210
        L 180 150
        L 100 150
        L 100 170
        L 100 150
        L 180 150
        L 180 170
        Q 190 160 200 170
        T 220 160
        T 240 160
        ";

        $poli = new SVGPath($d);
        $poli->setStyle('fill', "none");
        $poli->setStyle('stroke', $this->fontcolor);
        $poli->setStyle('stroke-width', '4');
        $this->doc->addChild($poli);

        $tet = new SVGText($name, 20, 270);
        $tet->setStyle('fill', $this->fontcolor);
        $tet->setStyle("font-family", $this->fontfamiliy);
        $tet->setStyle("font-size", "xxx-large");

        $this->doc->addChild($tet);
    }
    function Fahrgestell($art)
    {
        switch ($art) {
            case kfz_landgebunden:
                $circle1 = new SVGCircle(50, 315, 15);
                $circle1->setStyle("fill", "none");
                $circle1->setStyle('stroke', "#000");
                $circle1->setStyle('stroke-width', '4');
                $this->doc->addChild($circle1);

                $circle2 = new SVGCircle(340, 315, 15);
                $circle2->setStyle("fill", "none");
                $circle2->setStyle('stroke', "#000");
                $circle2->setStyle('stroke-width', '4');
                $this->doc->addChild($circle2);
                break;
            case kfz_gelaendefaehig:
                $circle1 = new SVGCircle(50, 315, 15);
                $circle1->setStyle("fill", "none");
                $circle1->setStyle('stroke', "#000");
                $circle1->setStyle('stroke-width', '4');
                $this->doc->addChild($circle1);

                $circle2 = new SVGCircle(195, 315, 15);
                $circle2->setStyle("fill", "none");
                $circle2->setStyle('stroke', "#000");
                $circle2->setStyle('stroke-width', '4');
                $this->doc->addChild($circle2);

                $circle3 = new SVGCircle(340, 315, 15);
                $circle3->setStyle("fill", "none");
                $circle3->setStyle('stroke', "#000");
                $circle3->setStyle('stroke-width', '4');
                $this->doc->addChild($circle3);
                break;
            case kfz_wechsellader:
                $circle1 = new SVGCircle(50, 325, 15);
                $circle1->setStyle("fill", "none");
                $circle1->setStyle('stroke', "#000");
                $circle1->setStyle('stroke-width', '4');
                $this->doc->addChild($circle1);

                $d = "
                M 390 310
                L 5 310
                L 5 65";

                $poli = new SVGPath($d);
                $poli->setStyle('fill', "none");
                $poli->setStyle('stroke', "#000");
                $poli->setStyle('stroke-width', '4');
                $this->doc->addChild($poli);

                $circle3 = new SVGCircle(340, 325, 15);
                $circle3->setStyle("fill", "none");
                $circle3->setStyle('stroke', "#000");
                $circle3->setStyle('stroke-width', '4');
                $this->doc->addChild($circle3);
                break;
            case kfz_abrollbehhaelter:
                $circle1 = new SVGCircle(10, 100, 15);
                $this->doc->addChild($circle1);
                break;
            case kfz_anhaenger:
                $line = new SVGLine(1, 150, 30, 150);
                $line->setStyle('stroke', "#000");
                $line->setStyle('stroke-width', '20');

                $this->doc->addChild($line);
                break;
            case kfz_schienenfahrzeug:
                $circle1 = new SVGCircle(50, 315, 15);
                $circle1->setStyle("fill", "none");
                $circle1->setStyle('stroke', "#000");
                $circle1->setStyle('stroke-width', '4');
                $this->doc->addChild($circle1);

                $circle2 = new SVGCircle(80, 315, 15);
                $circle2->setStyle("fill", "none");
                $circle2->setStyle('stroke', "#000");
                $circle2->setStyle('stroke-width', '4');
                $this->doc->addChild($circle2);

                $circle3 = new SVGCircle(320, 315, 15);
                $circle3->setStyle("fill", "none");
                $circle3->setStyle('stroke', "#000");
                $circle3->setStyle('stroke-width', '4');
                $this->doc->addChild($circle3);
                $circle4 = new SVGCircle(350, 315, 15);
                $circle4->setStyle("fill", "none");
                $circle4->setStyle('stroke', "#000");
                $circle4->setStyle('stroke-width', '4');
                $this->doc->addChild($circle4);
                break;
            case kfz_kettenfahrzeug:
                $d = "
                M 390 310
                L 15 310
                Q 5 320 15 330
                L 390 330
                Q 400 320 390 310
                ";

                $poli = new SVGPath($d);
                $poli->setStyle('fill', "none");
                $poli->setStyle('stroke', "#000");
                $poli->setStyle('stroke-width', '4');
                $this->doc->addChild($poli);
                break;
        }
    }
}
