<?php
namespace app\modules\admin;


use yii\base\BootstrapInterface;
use yii\base\Module as BaseModule;

/**
 * Модуль админки
 */
class Module extends BaseModule implements BootstrapInterface
{
	/**
	 * @inheritdoc
	 */
	public $controllerNamespace = 'app\modules\admin\commands';

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

		// custom initialization code goes here
	}

	/**
	 * Определяем параметры загрузки модуля
	 *
	 * @param \yii\console\Application $app
	 */
	public function bootstrap($app)
	{
		if ($app instanceof \yii\console\Application) {
			$this->controllerNamespace = 'app\modules\admin\commands';
		}
	}
}