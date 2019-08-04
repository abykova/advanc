<?php
namespace backend\controllers;

use app\models\TrophiesModel;
use app\models\UsersModel;
use common\models\LoginForm;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	return $this->render('index');
    }

	public function actionTrophy()
	{
		$trophy = $this->sendTrophy();
		$money = $this->sendMoney();
		$point = rand(0,100);

		$model = new UsersModel();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['index']);
		}
		return $this->render('_trophy',[
			'trophy' => $trophy,
			'money' => $money,
			'point' => $point,
			'model' => $model,
		]);
	}

	public function sendTrophy(){
		$id = rand(1, 4);
		$trophy = TrophiesModel::findOne($id)['key'];
		$xnjj = UsersModel::find()->select('trophy')->all()[0]->trophy;

		//получаю только первую строку из бд, а надо пробегать по всем

		if($trophy !== $xnjj){
			return $trophy;
		}
			return null;
	}

	public function sendMoney()
	{
		$money = rand(0, 100);
		$usedMoney = UsersModel::find()->sum('[[money]]');
		if ($money == $usedMoney || $money > $usedMoney){
			return null;
		}
		return $money;
	}

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
