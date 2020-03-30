<?php
namespace app\commands;

use yii\console\Controller;
use yii\helpers\Json;
use app\models\User;
use app\models\Loan;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $this->users();
        $this->loans();
    }

    public function users()
    {
        $users_json = file_get_contents(\Yii::$app->basePath . '/users.json');
        $users_decoded = Json::decode($users_json);

        foreach ($users_decoded as $user_attributes) {
            $user = new User();
            $user->attributes = $user_attributes;
            $user->save();
        }
    }

    public function loans()
    {
        $loans_json = file_get_contents(\Yii::$app->basePath . '/loans.json');
        $loans_decoded = Json::decode($loans_json);

        foreach ($loans_decoded as $loan_attributes) {
            $loan = new Loan();
            $loan_attributes['start_date'] = date('Y-m-d H:i:s', $loan_attributes['start_date']);
            $loan_attributes['end_date'] = date('Y-m-d H:i:s', $loan_attributes['end_date']);
            $loan->attributes = $loan_attributes;
            $loan->save();
        }
    }
}