<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $content
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $author
 */
class Blog extends \yii\db\ActiveRecord
{
    public $file;
    public function behaviors()
{
    return [
        [
            'class' => TimestampBehavior::className(),
            'createdAtAttribute' => 'created_at',
        ],
    ];
}
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Заголовок'),
            'image' => Yii::t('app', 'Картинка'),
            'content' => Yii::t('app', 'Сдержание'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'author' => Yii::t('app', 'Автор'),
        ];
    }
}
