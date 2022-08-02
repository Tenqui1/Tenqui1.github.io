<?php

namespace common\models;

use Yii;

class CommonHelper
{

    /**
     * 获取资源文件地址
     * @param      $file
     * @param bool $appendTimestamp
     *
     * @return string
     */
    public static function getAssetUrl($file, $appendTimestamp = true)
    {
        if (!$file) return '';

        $basePath = Yii::getAlias('@webroot');
        $baseUrl = Yii::getAlias('@web');

        if ($appendTimestamp && ($timestamp = @filemtime("$basePath/$file")) > 0) {
            return "$baseUrl$file?v=$timestamp";
        } else {
            return "$baseUrl$file";
        }
    }

    /*
     * 截取时间
     * */
    public static function getRegisetrDate($datetime){
            return substr($datetime,0,10);
    }

    /*
     * 解析点击,下载,点赞等数
     * */
    public static function  getAnalysisNum($str){
           return number_format($str);
    }
}


