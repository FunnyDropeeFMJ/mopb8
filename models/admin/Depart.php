<?php

namespace app\models\admin;

use Yii;

/**
 * This is the model class for table "depart".
 *
 * @property int $id
 * @property string|null $id_name_depart
 *
 * @property Personal[] $personals
 * @property Userbind[] $userbinds
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
            'id_name_depart' => 'Название отделения',
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

    /**
     * Gets query for [[Userbinds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserbinds()
    {
        return $this->hasMany(Userbind::className(), ['id_depart' => 'id']);
    }
}
