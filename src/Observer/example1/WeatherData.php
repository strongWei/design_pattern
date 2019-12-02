<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/2
 * Time: 13:05
 */

namespace Observer\example1;


class WeatherData implements Subject
{
    /**
     * @var array
     */
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;

    public function getTemperature(){
        return $this->temperature;
    }

    public function getHumidity(){
        return $this->humidity;
    }

    public function getPressure(){
        return $this->pressure;
    }

    public function measurementsChanged(){
        $this->notifyObservers();
    }

    public function addObserver(Observer $o)
    {
        array_push($this->observers, $o);
    }

    public function removeObserver(Observer $o)
    {
        $index = array_search($o, $this->observers);
        if($index === false){
            print_r('can\'t found it!');
        }
        unset($this->observers[$index]);
    }

    public function notifyObservers()
    {
        /**
         * @var Observer $observer
         */
        foreach ($this->observers as $observer){
            $observer->update($this->getTemperature(), $this->getHumidity(), $this->getPressure());
        }
    }

    public function setMeasurements($temperature, $humidity, $pressure){
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}