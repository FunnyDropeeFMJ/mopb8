<?php

namespace app\models\admin;

use Yii;

/**
 * This is the model class for table "compatbl".
 *
 * @property int $id
 * @property int|null $model_cart
 * @property int|null $model_printer
 *
 * @property Cartrige $modelCart
 * @property Printer $modelPrinter
 */
class Compatbl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compatbl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model_cart', 'model_printer'], 'integer'],
            [['model_cart'], 'exist', 'skipOnError' => true, 'targetClass' => Cartrige::className(), 'targetAttribute' => ['model_cart' => 'id']],
            [['model_printer'], 'exist', 'skipOnError' => true, 'targetClass' => Printer::className(), 'targetAttribute' => ['model_printer' => 'id_printer']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model_cart' => 'Model Cart',
            'model_printer' => 'Model Printer',
        ];
    }

    /**
     * Gets query for [[ModelCart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModelCart()
    {
        return $this->hasOne(Cartrige::className(), ['id' => 'model_cart']);
    }

    /**
     * Gets query for [[ModelPrinter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModelPrinter()
    {
        return $this->hasOne(Printer::className(), ['id_printer' => 'model_printer']);
    }
}
