<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Histogram;

use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedAnimation;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedChartOptions;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\AdvancedLegend;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\Bar;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\MediumTooltip;
use CMEN\GoogleChartsBundle\GoogleCharts\Options\VAxis;

/**
 * @author Christophe Meneses
 */
class HistogramOptions extends AdvancedChartOptions
{
    /**
     * @var AdvancedAnimation
     */
    protected $animation;

    /**
     * @var Bar
     */
    protected $bar;

    /**
     * The transparency of data points, with 1.0 being completely opaque and 0.0 fully transparent. In scatter,
     * histogram, bar, and column charts, this refers to the visible data: dots in the scatter chart and rectangles
     * in the others. In charts where selecting data creates a dot, such as the line and area charts, this refers to
     * the circles that appear upon hover or selection. The combo chart exhibits both behaviors, and this option has
     * no effect on other charts. (To change the opacity of a trendline, see
     * {@link https://developers.google.com/chart/interactive/docs/gallery/trendlines#Example4})
     *
     * @var float
     */
    protected $dataOpacity;

    /**
     *  The type of the entity that receives focus on mouse hover. Also affects which entity is selected by mouse
     * click, and which data table element is associated with events. Can be one of the following :
     * 'datum' - Focus on a single data point. Correlates to a cell in the data table.
     * 'category' - Focus on a grouping of all data points along the major axis. Correlates to a row in the data table.
     *
     * In focusTarget 'category' the tooltip displays all the category values. This may be useful for comparing values
     * of different series.
     *
     * @var string
     */
    protected $focusTarget;

    /**
     * @var HAxis
     */
    protected $hAxis;

    /**
     * @var Histogram
     */
    protected $histogram;

    /**
     * Whether to guess the value of missing points. If true, it will guess the value of any missing data based on
     * neighboring points. If false, it will leave a break in the line at the unknown point.
     *
     * @var boolean
     */
    protected $interpolateNulls;

    /**
     *  If set to true, stacks the elements for all series at each domain value. The isStacked option also supports
     * 100% stacking, where the stacks of elements at each domain value are rescaled to add up to 100%.
     *
     * The options for isStacked are:
     * false — elements will not stack. This is the default option.
     * true — stacks elements for all series at each domain value.
     * 'percent' — stacks elements for all series at each domain value and rescales them such that they add up to
     * 100%, with each element's value calculated as a percentage of 100%.
     * 'relative' — stacks elements for all series at each domain value and rescales them such that they add up to 1,
     * with each element's value calculated as a fraction of 1.
     * 'absolute' — functions the same as isStacked: true.
     *
     * For 100% stacking, the calculated value for each element will appear in the tooltip after its actual value.
     * The target axis will default to tick values based on the relative 0-1 scale as fractions of 1 for 'relative',
     * and 0-100% for 'percent' (Note: when using the 'percent' option, the axis/tick values are displayed as
     * percentages, however the actual values are the relative 0-1 scale values. This is because the percentage axis
     * ticks are the result of applying a format of "#.##%" to the relative 0-1 scale values. When using isStacked :
     * 'percent', be sure to specify any ticks/gridlines using the relative 0-1 scale values). You can customize the
     * gridlines/tick values and formatting using the appropriate hAxis/vAxis options.
     * 100% stacking only supports data values of type number, and must have a baseline of zero.
     *
     * @var boolean|string
     */
    protected $isStacked;

    /**
     * @var AdvancedLegend
     */
    protected $legend;

    /**
     * The orientation of the chart. When set to 'vertical', rotates the axes of the chart.
     *
     * @var string
     */
    protected $orientation;

    /**
     * If set to true, will draw series from right to left. The default is to draw left-to-right.
     *
     * @var boolean
     */
    protected $reverseCategories;

    /**
     * @var MediumTooltip
     */
    protected $tooltip;

    /**
     * Specifies properties for individual vertical axes, if the chart has multiple vertical axes. Each child object
     * is a VAxis object, and can contain all the properties supported by vAxis. These property values override any
     * global settings for the same property.
     * To specify a chart with multiple vertical axes, first define a new axis using series.targetAxisIndex, then
     * configure the axis using vAxes.
     *
     * @var VAxis[]
     */
    protected $vAxes;


    public function __construct()
    {
        parent::__construct();

        $this->animation = new AdvancedAnimation();
        $this->bar = new Bar();
        $this->histogram = new Histogram();
        $this->hAxis = new HAxis();
        $this->legend = new AdvancedLegend();
        $this->tooltip = new MediumTooltip();
    }


    /**
     * @return AdvancedAnimation
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * @return Bar
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * @return Histogram
     */
    public function getHistogram()
    {
        return $this->histogram;
    }

    /**
     * @return HAxis
     */
    public function getHAxis()
    {
        return $this->hAxis;
    }

    /**
     * @return AdvancedLegend
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return MediumTooltip
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @param float $dataOpacity
     *
     * @return HistogramOptions
     */
    public function setDataOpacity($dataOpacity)
    {
        $this->dataOpacity = $dataOpacity;

        return $this;
    }

    /**
     * @param string $focusTarget
     *
     * @return HistogramOptions
     */
    public function setFocusTarget($focusTarget)
    {
        $this->focusTarget = $focusTarget;

        return $this;
    }

    /**
     * @param boolean $interpolateNulls
     *
     * @return HistogramOptions
     */
    public function setInterpolateNulls($interpolateNulls)
    {
        $this->interpolateNulls = $interpolateNulls;

        return $this;
    }

    /**
     * @param bool|string $isStacked
     *
     * @return HistogramOptions
     */
    public function setIsStacked($isStacked)
    {
        $this->isStacked = $isStacked;

        return $this;
    }

    /**
     * @param string $orientation
     *
     * @return HistogramOptions
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * @param boolean $reverseCategories
     *
     * @return HistogramOptions
     */
    public function setReverseCategories($reverseCategories)
    {
        $this->reverseCategories = $reverseCategories;

        return $this;
    }

    /**
     * @param string $theme
     *
     * @return HistogramOptions
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @param VAxis[] $vAxes
     *
     * @return HistogramOptions
     */
    public function setVAxes($vAxes)
    {
        $this->vAxes = $vAxes;

        return $this;
    }
}
