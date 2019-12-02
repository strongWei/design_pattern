<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/2
 * Time: 13:03
 */

namespace Observer\example1;


interface Observer
{
    public function update($temperature, $humidity, $pressure);
}