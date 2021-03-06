<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffBarChart;

/**
 * @author Christophe Meneses
 */
class Diff
{
    /**
     * @var NewData
     */
    protected $newData;


    public function __construct()
    {
        $this->newData = new NewData();
    }


    /**
     * @return NewData
     */
    public function getNewData()
    {
        return $this->newData;
    }
}
