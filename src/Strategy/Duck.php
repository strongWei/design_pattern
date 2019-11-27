<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:08
 */

namespace Strategy;

use Strategy\behavior\FlyBehavior;
use Strategy\behavior\QuackBehavior;

/**
 * Class Duck
 * @package strong
 */
abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    private $flyBehavior;

    /**
     * @var QuackBehavior
     */
    private $quackBehavior;

    public abstract function display();

    public function performFly(){
        $this->flyBehavior->fly();
    }

    public function performQuack() {
        $this->quackBehavior->quack();
    }

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior($flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior($quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}