<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/27
 * Time: 13:22
 */

require_once __DIR__ . '/../autoload.php';

/**
 * @var Strategy\Duck
 */
$duck = new Strategy\MallardDuck();
$duck -> performFly();
$duck -> performQuack();
$duck -> display();