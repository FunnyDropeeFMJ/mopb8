<?php

namespace app\models\admin;

use Yii;

/**
 * This is the model class for table "storage".
 *
 * @property int $id
 * @property int|null $name
 * @property int|null $count
 *
 * @property Cartrige $name0
 */
class Storage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'storage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'count'], 'integer'],
            [['name'], 'exist', 'skipOnError' => true, 'targetClass' => Cartrige::className(), 'targetAttribute' => ['name' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название товара',
            'count' => 'Количество',
        ];
    }

    /**
     * Gets query for [[Name0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getName0()
    {
        return $this->hasOne(Cartrige::className(), ['id' => 'name']);
    }
}
