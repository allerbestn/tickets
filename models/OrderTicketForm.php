<?php

namespace app\models;

use yii\base\Model;

/**
 * Class OrderTicketForm
 * @package app\models
 * @var $roundTrip boolean туди й назад
 */
class OrderTicketForm extends Model
{
    public $stationFrom;
    public $stationTill;
    public $dateDeparture;
    public $timeDeparture;
    public $roundTrip;

    public function dataIsEntered()
    {
        if (isset($_POST['submit'])) {
            return true;
        } else {
            return false;
        }
    }

    public function getData()
    {
        $this->stationFrom = $_POST['OrderTicketForm']['stationFrom'];
        return $this->stationFrom;
    }
}