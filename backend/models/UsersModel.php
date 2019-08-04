<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $username
 * @property int $points
 * @property int $money
 * @property int $trophy
 */
class UsersModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['points', 'money', 'trophy'], 'default', 'value' => null],
            [['points', 'money', 'trophy'], 'integer'],
            [['username'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'points' => 'Points',
            'money' => 'Money',
            'trophy' => 'Trophy',
        ];
    }
}
