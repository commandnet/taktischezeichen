<?php

namespace Hhansen06\Taktischezeichen;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Texts\SVGText;
use SVG\SVG;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Shapes\SVGPath;
use Hhansen06\Taktischezeichen\Icons\Icons\Fahrzeug;
use SVG\Nodes\Shapes\SVGPolyline;

class Taktischezeichen
{

    var $farben = [

        "feuerwehr" => [
            "fontcolor"  => "#000000",
            "backcolor" => "#ff0000"
        ],

        "thw" => [
            "fontcolor"  => "#ffffff",
            "backcolor" => "#0f478c"
        ]
    ];

    var $fontfamiliy = "Arial";

    var $image;
    var $doc;
    var $width = 400;
    var $height = 350;

    var $fontcolor;
    var $backcolor;

    function __construct($hilfsorganisation = "feuerwehr")
    {
        if (!isset($this->farben[$hilfsorganisation])) {
            die("Hilfsorganisation " . $hilfsorganisation . " aktuell nicht unterstuetzt.");
        }
        $this->fontcolor = $this->farben[$hilfsorganisation]["fontcolor"];
        $this->backcolor = $this->farben[$hilfsorganisation]["backcolor"];

        $this->image = new SVG($this->width, $this->height);
        $this->doc =  $this->image->getDocument();
        $this->rahmen();
        $this->basisshape();
        if ($hilfsorganisation == "thw") {
            $this->thwSpecial();
        }
    }

    function thwSpecial()
    {
        $line = new SVGPolyline([
            [15, 75],
            [15, 295],
            [385, 295],
            [385, 75],
            [15, 75]
        ]);
        $line->setStyle('stroke', $this->fontcolor);
        $line->setStyle('stroke-width', '2');
        $line->setStyle('fill', 'none');
        $this->doc->addChild($line);

        $tet = new SVGText("THW", 325, 290);
        $tet->setStyle('fill', $this->fontcolor);
        $tet->setStyle("font-family", $this->fontfamiliy);
        $tet->setStyle("font-size", "x-large");

        $this->doc->addChild($tet);
    }

    function Groesse($groesse = 1)
    {
        $offset_y = 40;
        $offset_x = $this->width / ($groesse + 1);
        $pos = 1;
        if ($groesse < 4) {
            while ($pos <= $groesse) {
                $circle = new SVGCircle($offset_x * $pos, $offset_y, 15);
                $this->doc->addChild($circle);
                $pos++;
            }
        } elseif ($groesse == Staffel) {
            $circle = new SVGCircle(200, 20, 15);
            $this->doc->addChild($circle);
            $circle = new SVGCircle(200, 60, 15);
            $this->doc->addChild($circle);
        } elseif ($groesse == ZugTrupp) {
            $groesse = 3;
            $offset_y = 90;
            $offset_x = $this->width / ($groesse + 1);
            while ($pos <= $groesse) {
                $circle = new SVGCircle($offset_x * $pos, $offset_y, 15);
                $this->doc->addChild($circle);
                $pos++;
            }
            $circle = new SVGCircle(200, 40, 15);
            $this->doc->addChild($circle);
        }
    }
    function Art($text)
    {
        $tet = new SVGText($text, "50%", 200);
        $tet->setStyle('fill', $this->fontcolor);
        $tet->setStyle("font-family", $this->fontfamiliy);
        $tet->setStyle("font-size", "5em");
        $tet->setStyle("text-anchor", "middle");

        $this->doc->addChild($tet);
    }
    function SubArt($text)
    {
        $tet = new SVGText($text, 20, 290);
        $tet->setStyle('fill', $this->fontcolor);
        $tet->setStyle("font-family", $this->fontfamiliy);
        $tet->setStyle("font-size", "x-large");

        $this->doc->addChild($tet);
    }
    function SetLoescheinheit($smalltext = "")
    {
        $d = "
        M 10 190
        L 390 190
        L 280 190
        L 390 70
        L 280 190
        L 390 300

        ";

        $poli = new SVGPath($d);
        $poli->setStyle('fill', "none");
        $poli->setStyle('stroke', "#000");
        $poli->setStyle('stroke-width', '6');
        $this->doc->addChild($poli);

        $tet = new SVGText($smalltext, 20, 260);
        $tet->setStyle('fill', $this->fontcolor);
        $tet->setStyle("font-family", $this->fontfamiliy);
        $tet->setStyle("font-size", "xxx-large");

        $this->doc->addChild($tet);
    }


    function rahmen()
    {
        $square = new SVGRect(0, 0, $this->width, $this->height);
        $square->setStyle('fill', '#ffffff');
        $square->setStyle('stroke', '#000000');
        $square->setStyle('stroke-width', '4');
        $this->doc->addChild($square);
    }

    function render()
    {
        header('Content-Type: image/svg+xml');
        echo $this->image;
    }

    function __destruct()
    {
    }
}
