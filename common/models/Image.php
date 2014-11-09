<?php

namespace common\models;

use common\models\Image;
use Yii;

/**
 * This is the model class for table "{{%images}}".
 *
 * @property string $id
 * @property string $name
 */
class Image extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%image}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
    /**
     * return model
     */
    public static function getmodel()
    {
        
        return $model = Image::find()->all();
    }
}
