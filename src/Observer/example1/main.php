<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/2
 * Time: 13:16
 */
require_once __DIR__ . '/../../autoload.php';

$weather = new \Observer\example1\WeatherData();
/** @var \Observer\example1\Observer $statisticDisplay */
$statisticDisplay = new \Observer\example1\StatisticDisplay($weather);
/** @var \Observer\example1\Observer $forecastDisplay */
$forecastDisplay = new \Observer\example1\ForecastDisplay($weather);
/** @var \Observer\example1\Observer $currentConditionDisplay */
$currentConditionDisplay = new \Observer\example1\CurrentConditionDisplay($weather);
$weather->setMeasurements(1,2,3);
