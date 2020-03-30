<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property int $personal_code
 * @property int $phone
 * @property bool|null $active
 * @property bool|null $dead
 * @property string|null $lang
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'personal_code', 'phone'], 'required'],
            [['first_name', 'last_name', 'email', 'lang'], 'string'],
            [['personal_code', 'phone'], 'default', 'value' => null],
            [['personal_code', 'phone'], 'integer'],
            [['active', 'dead'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'personal_code' => Yii::t('app', 'Personal Code'),
            'phone' => Yii::t('app', 'Phone'),
            'active' => Yii::t('app', 'Active'),
            'dead' => Yii::t('app', 'Dead'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }
}
