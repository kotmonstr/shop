<?php

namespace common\models;
use Yii;

/**
 * This is the model class for table "{{%images}}".
 *
 * @property string $id
 * @property string $name
 */
class Image extends \yii\db\ActiveRecord
{
    public function behaviors()
{
    return [
       
        [
            'class' => 'mdm\upload\UploadBehavior',
            'attribute' => 'file', // required, use to receive input file
            'savedAttribute' => 'name', // optional, use to link model with saved file.
            'uploadPath' => '@common/upload', // saved directory. default to '@runtime/upload'
        ],
    ];
}
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
