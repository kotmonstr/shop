<?php

namespace common\models;


use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "video".
 *
 * @property integer $id
 * @property string $youtube_id
 * @property string $title
 * @property string $descr
 * @property integer $created_at
 * @property integer $categoria
 *
 * @property VideoCategoria $categoria0
 */
class Video extends \yii\db\ActiveRecord
{
        public function behaviors()
{
    return [
        [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'created_at',
           
        ],
    ];
}
public $updated_at;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['youtube_id', 'title', 'categoria'], 'required'],
            [['descr'], 'string'],
            [['created_at', 'categoria'], 'integer'],
            [['youtube_id', 'title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'youtube_id' => Yii::t('app', 'Youtube ID'),
            'title' => Yii::t('app', 'Title'),
            'descr' => Yii::t('app', 'Descr'),
            'created_at' => Yii::t('app', 'Created At'),
            'categoria' => Yii::t('app', 'Categoria'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(VideoCategoria::className(), ['id' => 'categoria']);
    }
}
