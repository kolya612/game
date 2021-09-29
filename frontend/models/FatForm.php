<?php
namespace frontend\models;

use backend\modules\members\models\Members;
use backend\modules\progress\models\Progress;
use common\models\Config;
use Yii;
use yii\base\BaseObject;
use yii\base\Model;
use common\models\User;

/**
 * Password reset request form
 */
class FatForm extends Model
{
    public $fat;
    public $date;

    public function init()
    {
        parent::init();
        $this->date=date("m/d/Y");
    }

    public static function getEmptyModel(){
        return new self();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fat','date'], 'required'],
        ];
    }

    public function prepareDate($date){             // US format to Mysql
        $tmp=explode('/',$date);
        return $tmp[2].'-'.$tmp[0].'-'.$tmp[1];
    }

    public function getRealDate(){
        if(strpos($this->date,'/')) return $this->prepareDate($this->date);
        return $this->date;
    }

    public function getProgress(){
        $progress = Progress::findOne([
            'member_id' => Yii::$app->user->identity->id,
            'date' => $this->realDate,
        ]);

        if(!$progress){
            $progress = new Progress([
                'member_id' => Yii::$app->user->identity->id,
                'date' => $this->realDate,
            ]);
        }

        return $progress;
    }

    public function track()
    {
        /* @var $user User */
        $progress = $this->getProgress();

        $progress->fat=$this->fat;

        return $progress->save();
    }
}
