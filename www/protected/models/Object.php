<?php
/**
 * Created by PhpStorm.
 * User: vishin
 * Date: 05.12.13
 * Time: 13:55
 */

class Object extends EMongoDocument{
    public $data;
    public $date;

    // This has to be defined in every model, this is same as with standard Yii ActiveRecord
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    // This method is required!
    public function getCollectionName()
    {
        return 'plain_data';
    }

    public function rules()
    {
        return array(
            array('data,date', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'data'  => 'Данные',
            'date'  => 'Дата заполнения',
        );
    }
} 