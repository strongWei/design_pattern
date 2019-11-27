<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:18
 */

namespace Strategy\behavior;

/**
 * Class MuteQuack
 * @package Strategy\behavior
 */
class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        print_r('mute quack' .  PHP_EOL);
    }
}