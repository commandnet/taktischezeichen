<?php

namespace Hhansen06\Taktischezeichen;

use SVG\Nodes\Shapes\SVGRect;

class Einheit extends Taktischezeichen
{
    function basisshape()
    {
        $offset = 10;
        $square = new SVGRect(10, 70, 380, 230);
        $square->setStyle('fill', $this->backcolor);
        $square->setStyle('stroke', $this->fontcolor);
        $square->setStyle('stroke-width', '4');
        $this->doc->addChild($square);
    }
}
