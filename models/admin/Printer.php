<?php

namespace app\models\admin;

use Yii;

/**
 * This is the model class for table "printer".
 *
 * @property int $id
 * @property string|null $inventory_id
 * @property int|null $id_printer
 * @property string|null $printer_name
 * @property string|null $serv_number
 *
 * @property Compatbl[] $compatbls
 */
class Printer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'printer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['printer_name','id_printer'], 'required'],
            [['id_printer'], 'integer'],
            [['inventory_id', 'printer_name', 'serv_number'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'inventory_id' => 'Инвентарный Номер',
            'id_printer' => 'Id Принтера',
            'printer_name' => 'Название принтера',
            'serv_number' => 'Серийный номер',
        ];
    }

    /**
     * Gets query for [[Compatbls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompatbls()
    {
        return $this->hasMany(Compatbl::className(), ['model_printer' => 'id_printer']);
    }
}
