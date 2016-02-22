<?php
namespace x1\assets\BootstrapMaterialDatetimePicker;

use yii\web\AssetBundle;


class BootstrapMaterialDatetimePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/e-frank/yii2-bootstrap-material-datetime-picker/assets';
    
    public $css = [
        'css/bootstrap-material-datetimepicker.css',
    ];
    
    public $js = [
        'js/bootstrap-material-datetimepicker.js',
    ];
    
    public $depends = [
        'x1\assets\moment\MomentAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
