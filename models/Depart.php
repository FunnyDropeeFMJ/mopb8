<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "depart".
 *
 * @property int $id
 * @property string|null $id_name_depart
 *
 * @property Personal[] $personals
 */
class Depart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'depart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_name_depart'], 'string', 'max' => 50],
            [['id_name_depart'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_name_depart' => 'Id Name Depart',
        ];
    }

    /**
     * Gets query for [[Personals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonals()
    {
        return $this->hasMany(Personal::className(), ['id_depart_n' => 'id']);
    }
}
