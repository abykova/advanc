<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addresses".
 *
 * @property int $index
 * @property string $country
 * @property string $city
 * @property string $address
 * @property int $zip
 */
class AddressesModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['index', 'zip'], 'default', 'value' => null],
            [['index', 'zip'], 'integer'],
            [['country', 'city'], 'string', 'max' => 25],
            [['address'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'index' => 'Index',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'zip' => 'Zip',
        ];
    }
}
