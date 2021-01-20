<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cartrige".
 *
 * @property int $id
 * @property string|null $model_name
 *
 * @property Compatbl[] $compatbls
 */
class Cartrige extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cartrige';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_name' => 'Model Name',
        ];
    }

    /**
     * Gets query for [[Compatbls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompatbls()
    {
        return $this->hasMany(Compatbl::className(), ['model_cart' => 'model_name']);
    }
}
