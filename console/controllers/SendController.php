<?php
namespace console\controllers;

use yii\console\Controller;

/**
 * @package app\commands
 */
class SendController extends Controller
{
    protected $arrayUser = [
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

//    protected $amount = '100';
//    protected $arrayAmount = [];
//    gmp_sub((int)$this->amount,(int)$value);

    public function actionSend()
    {
        foreach ($this->arrayUserMoney as $key => $value) {
            if (!empty($value) && $value !== 0 ) {
                $userName = $this->arrayUser[$key];
                echo 'send money: ' . $value . ' ' . $userName,PHP_EOL;
            }
        }
    }
}
