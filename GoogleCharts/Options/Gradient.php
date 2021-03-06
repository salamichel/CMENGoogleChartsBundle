<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class Gradient
{
    /**
     * Start color for gradient.
     *
     * @var string
     */
    protected $color1;

    /**
     * Finish color for gradient.
     *
     * @var string
     */
    protected $color2;

    /**
     * Where on the boundary to start the color1 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $x1;

    /**
     * Where on the boundary to end the color1 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $y1;

    /**
     * Where on the boundary to start the color2 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $x2;

    /**
     * Where on the boundary to end the color2 gradient, relative to the upper left corner of the boundary.
     *
     * @var string
     */
    protected $y2;

    /**
     * If true, the boundary for x1, y1, x2, and y2 is the box. If false, it's the entire chart.
     *
     * @var boolean
     */
    protected $useObjectBoundingBoxUnits;


    /**
     * @param string $color1
     *
     * @return Gradient
     */
    public function setColor1($color1)
    {
        $this->color1 = $color1;

        return $this;
    }

    /**
     * @param string $color2
     *
     * @return Gradient
     */
    public function setColor2($color2)
    {
        $this->color2 = $color2;

        return $this;
    }

    /**
     * @param string $x1
     *
     * @return Gradient
     */
    public function setX1($x1)
    {
        $this->x1 = $x1;

        return $this;
    }

    /**
     * @param string $y1
     *
     * @return Gradient
     */
    public function setY1($y1)
    {
        $this->y1 = $y1;

        return $this;
    }

    /**
     * @param string $x2
     *
     * @return Gradient
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;

        return $this;
    }

    /**
     * @param string $y2
     *
     * @return Gradient
     */
    public function setY2($y2)
    {
        $this->y2 = $y2;

        return $this;
    }

    /**
     * @param boolean $useObjectBoundingBoxUnits
     *
     * @return Gradient
     */
    public function setUseObjectBoundingBoxUnits($useObjectBoundingBoxUnits)
    {
        $this->useObjectBoundingBoxUnits = $useObjectBoundingBoxUnits;

        return $this;
    }
}
