<?php
/**
 * Created by PhpStorm.
 * User: Maksim Sergeevich (doctorpepper608@gmail.com)
 * Date: 27.05.2016
 * Time: 11:32
 */

namespace wbp\helpers;

use Yii;
use wbp\file\File;
use yii\base\Exception;

class UploadifyHelper
{
    public static function saveUploadedFiles($fileTypes, $item_id = '', $limit = false)
    {
        if(!$fileTypes) return;
       
        $types = [];
        $imagesUniques = Yii::$app->request->post('file');
        if (is_array($imagesUniques)) {
            foreach ($imagesUniques as $num=>$unique_id) {
                $files = File::find()->where(['unique_id' => $unique_id]);
                foreach ($files->each() as $file) {

                    if (!in_array($file->type, $fileTypes)) { continue;}
                    if (!in_array($file->type, $types)) $types[] = $file->type;
                    $file->item_id = $item_id;
                    $file->save();
                    unset($imagesUniques[$num]);
                }
            }
        }
        if ($limit) {
            foreach ($types as $type) {
                $files = File::find()->where(['item_id' => $item_id, 'type' => $type])->orderBy('sort, id desc');
                $currentLimit = 0;
                foreach ($files->each() as $image) {
                    if ($currentLimit >= $limit) $image->delete();
                    $currentLimit++;
                }
            }
        }

    }
}