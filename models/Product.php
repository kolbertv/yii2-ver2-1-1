<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property int $created_at
 */
class Product extends \yii\db\ActiveRecord
{

    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */

    public function scenarios()
    {
        return [
            //parent::scenarios(); // TODO: Change the autogenerated stub

            self::SCENARIO_DEFAULT => ['name'],
            self::SCENARIO_CREATE=> ['price', 'name', 'created_at'],
            self::SCENARIO_UPDATE => ['price'],

        ];
    }

    public function rules()
    {
        return [
            [['name', 'price', 'created_at'], 'required', 'on'=>self::SCENARIO_CREATE],
            [['created_at'], 'integer'],
            [['price'], 'integer', 'max' => 100000, 'on'=>self::SCENARIO_UPDATE],
            [['price'], 'integer', 'max' => 1000, 'on'=>self::SCENARIO_CREATE],
            [['name'], 'filter', 'filter' => function ($value) {
                return trim(strip_tags($value));}, 'on'=>self::SCENARIO_CREATE],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'created_at' => 'Created At',
        ];
    }
}