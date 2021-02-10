<?php

namespace app\models\admin;

use Yii;

/**
 * This is the model class for table "cartrige".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Compatbl[] $compatbls
 * @property Storage[] $storages
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
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Compatbls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompatbls()
    {
        return $this->hasMany(Compatbl::className(), ['model_cart' => 'id']);
    }

    /**
     * Gets query for [[Storages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStorages()
    {
        return $this->hasMany(Storage::className(), ['name' => 'id']);
    }
}
