<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/2
 * Time: 13:09
 */

namespace Observer\example1;


class CurrentConditionDisplay implements Observer
{
    /** @var float */
    private $temperature;
    /** @var float */
    private $humidity;
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
        print("currentConditionDisplay: $temperature, $humidity, $pressure" . PHP_EOL);
    }
}