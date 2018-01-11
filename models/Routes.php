<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "routes".
 *
 * @property integer $id_route
 * @property string $station_from
 * @property string $station_till
 * @property string $date_dep
 * @property string $time_dep
 * @property integer $cars_count
 * @property integer $free_places
 * @property string $arrival_date
 * @property string $arrival_time
 * @property string $train_number
 */
class Routes extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'routes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['station_from', 'station_till', 'date_dep'], 'required'],
            [['date_dep', 'arrival_date'], 'safe'],
            [['cars_count', 'free_places'], 'integer'],
            [['station_from', 'station_till', 'arrival_time', 'train_number'], 'string', 'max' => 45],
            [['time_dep'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_route' => 'Id Route',
            'station_from' => 'Звідки',
            'station_till' => 'Куди',
            'date_dep' => 'Дата відпр.',
            'time_dep' => 'Час відпр.',
            'cars_count' => 'К-сть вагонів',
            'free_places' => 'Вільних місць',
            'arrival_date' => 'Дата прибуття',
            'arrival_time' => 'Час прибуття',
            'train_number' => 'Номер потяга',
        ];
    }
}
