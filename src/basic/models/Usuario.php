<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $ursename
 * @property string $nombre
 * @property string $apellido
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ursename', 'nombre', 'apellido'], 'required'],
            [['ursename'], 'string', 'max' => 50],
            [['nombre', 'apellido'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ursename' => 'Ursename',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
        ];
    }
}