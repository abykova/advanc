<?php
namespace app\modules\admin\commands;

use yii\helpers\Console;
use yii\console\Controller;


/**
 * Конфигурируем роли и разрешения.
 * @package app\commands
 */
class SendController extends Controller
{
	public function actionInit()
	{
		echo 'hello this is command action';
	}
}

