<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:18
 */

namespace Strategy\behavior;

/**
 * Class Squeak
 * @package Strategy\behavior
 */
class Squeak implements QuackBehavior
{

    public function quack()
    {
        print_r('squeak quack' . PHP_EOL);
    }
}