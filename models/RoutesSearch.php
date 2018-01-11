<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * RoutesSearch represents the model behind the search form about `\app\models\Routes`.
 */
class RoutesSearch extends Routes
{

    public static $stationFrom1 = '1';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_route', 'cars_count', 'free_places'], 'integer'],
            [['station_from', 'station_till', 'date_dep', 'time_dep', 'arrival_date', 'arrival_time', 'train_number'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $stationFrom = $_SESSION['ticket']['stationFrom'];
        $stationTill = $_SESSION['ticket']['stationTill'];
        $dateDep = $_SESSION['ticket']['dateDeparture'];
        $timeDep = $_SESSION['ticket']['timeDeparture'];

        if (Yii::$app->user->identity->login === 'admin') {
            $query = Routes::find();
        } else {
            $whereQuery = [];
            $stationFrom ? $whereQuery['station_from'] = $stationFrom : [];
            $stationTill ? $whereQuery['station_till'] = $stationTill : [];
            $dateDep ? $whereQuery['date_dep'] = $dateDep : [];
            $timeDep ? $whereQuery['time_dep'] = $timeDep : [];

            $query = Routes::find()->where($whereQuery);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_route' => $this->id_route,
            'date_dep' => $this->date_dep,
            'cars_count' => $this->cars_count,
            'free_places' => $this->free_places,
            'arrival_date' => $this->arrival_date,
        ]);

        $query->andFilterWhere(['like', 'station_from', $this->station_from])
            ->andFilterWhere(['like', 'station_till', $this->station_till])
            ->andFilterWhere(['like', 'time_dep', $this->time_dep])
            ->andFilterWhere(['like', 'arrival_time', $this->arrival_time])
            ->andFilterWhere(['like', 'train_number', $this->train_number]);

        return $dataProvider;
    }
}
