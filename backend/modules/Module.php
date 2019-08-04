<?php
namespace app\modules\admin;


use yii\base\BootstrapInterface;
use yii\base\Module as BaseModule;
use yii\console\Application;

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
	 * @param Application $app
	 */
	public function bootstrap($app)
	{
		if ($app instanceof Application) {
			$this->controllerNamespace = 'app\modules\admin\commands';
		}
	}
}