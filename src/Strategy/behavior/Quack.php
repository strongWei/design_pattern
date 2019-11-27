<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:17
 */

namespace Strategy\behavior;


class Quack implements QuackBehavior
{

    public function quack()
    {
        print_r('quack' . PHP_EOL);
    }
}