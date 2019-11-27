<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:16
 */

namespace Strategy\behavior;

/**
 * Class FlyWithWing
 * @package Strategy\behavior
 */
class FlyWithWing implements FlyBehavior
{
    public function fly()
    {
        print_r('fly with wing' .  PHP_EOL);
    }
}