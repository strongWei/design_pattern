<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/2
 * Time: 13:10
 */

namespace Observer\example1;


class StatisticDisplay implements Observer
{
    /** @var float */
    private $temperature;
    /** @var float */
    private $humidity;
    /** @var float */
    private $pressure;
    /** @var WeatherData */
    private $weatherData;

    /**
     * CurrentConditionDisplay constructor.
     * @param WeatherData $weatherData
     */
    public function __construct($weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->addObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        print("statisticDisplay: $temperature, $humidity, $pressure" . PHP_EOL);
    }
}