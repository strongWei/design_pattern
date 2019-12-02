<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/12/2
 * Time: 13:02
 */

namespace Observer\example1;


interface Subject
{
    public function addObserver(Observer $o);
    public function removeObserver(Observer $o);
    public function notifyObservers();
}