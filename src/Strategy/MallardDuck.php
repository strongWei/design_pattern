<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:19
 */

namespace Strategy;


use Strategy\behavior\FlyWithWing;
use Strategy\behavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWing());
        $this->setQuackBehavior(new Quack());
    }

    public function display()
    {
        print_r('There is MallardDuck display' . PHP_EOL);
    }
}