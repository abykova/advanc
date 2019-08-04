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
        '5' => '',
    ];

	public function actionInit()
	{
        $arr = array($this->actionArrayUser());

        foreach ($arr as  $name) {
            for ($i = 0, $size = count($arr); $i < $size; ++$i) {
                echo 'send ' . $name,PHP_EOL;
            }
        }
	}

	public function actionArrayUser()
    {
        foreach ($this->arrayUserMoney as $key => $value) {
            if (!empty($value)){
                return $this->arrayUser[$key];
            }
        }
    }
}
