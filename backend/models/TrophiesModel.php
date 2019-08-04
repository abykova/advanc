<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trophies".
 *
 * @property int $index
 * @property string $name
 * @property int $key
 */
class TrophiesModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trophies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['index'], 'default', 'value' => null],
            [['index'], 'integer'],
            [['name'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'index' => 'Index',
            'name' => 'Name',
            'key' => 'Key',
        ];
    }
}
