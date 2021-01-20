<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userbind".
 *
 * @property int $id_depart
 * @property int|null $user_name
 *
 * @property Depart $depart
 * @property User $userName
 */
class Userbind extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userbind';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name'], 'integer'],
            [['id_depart'], 'exist', 'skipOnError' => true, 'targetClass' => Depart::className(), 'targetAttribute' => ['id_depart' => 'id']],
            [['user_name'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_name' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_depart' => 'Id Depart',
            'user_name' => 'User Name',
        ];
    }

    /**
     * Gets query for [[Depart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepart()
    {
        return $this->HasMany(Depart::className(), ['id' => 'id_depart']);
    }

//     public static function getParentsList()
// {
//     // Выбираем только те категории, у которых есть дочерние категории
//     $parents = Category::find()
//         ->select(['c.id', 'c.name'])
//         ->join('JOIN', 'category c', 'category.parent_id = c.id')
//         ->distinct(true)
//         ->all();

//     return ArrayHelper::map($parents, 'id', 'name');
// }
    /**
     * Gets query for [[UserName]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserName()
    {
        return $this->hasOne(User::className(), ['id' => 'user_name']);
    }
}
