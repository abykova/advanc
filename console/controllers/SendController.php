<?php
namespace console\controllers;

use yii\console\Controller;

/**
 * @package app\commands
 */
class SendController extends Controller
{
    public $arrayUser = [
        '1' => 'user one',
        '2' => 'user two',
        '3' => 'user three',
        '4' => 'user four',
        '5' => 'user five',
    ];

    protected $arrayUserMoney = [
        '1' => '57',
        '2' => '',
        '3' => '69',
        '4' => '1',
        '5' => '0',
    ];

    public function actionSend()
    {
        foreach ($this->arrayUserMoney as $key => $value) {
            if (!empty($value) && $value !== 0){
                $arr = $this->arrayUser[$key];
                echo 'send money: ' . $arr,PHP_EOL;
            }
        }
    }
}
