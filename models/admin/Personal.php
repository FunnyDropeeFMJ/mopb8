<?php

namespace app\models\admin;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id
 * @property string|null $personal_name
 * @property string|null $post
 * @property int|null $id_depart_n
 *
 * @property Depart $departN
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['personal_name','id_depart_n','post'], 'required', 'message' => '{attribute} - Не может быть пустым полем.'],
            [['id_depart_n'], 'integer'],
            [['personal_name'], 'string', 'max' => 30],
            [['post'], 'string', 'max' => 20],
            [['personal_name'], 'unique'],
            [['id_depart_n'], 'exist', 'skipOnError' => true, 'targetClass' => Depart::className(), 'targetAttribute' => ['id_depart_n' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'personal_name' => 'ФИО',
            'post' => 'Должность',
            'id_depart_n' => 'Отделение',
        ];
    }

    /**
     * Gets query for [[DepartN]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartN()
    {
        return $this->hasOne(Depart::className(), ['id' => 'id_depart_n']);
    }
}
