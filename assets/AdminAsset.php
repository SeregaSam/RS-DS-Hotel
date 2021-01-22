<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


/**
 * admin asset bundle.
 */
class AdminAsset extends AssetBundle
{
   public $sourcePath = '@admin/web';
    public $css = [
        'https://use.fontawesome.com/releases/v5.2.0/css/all.css',
        'https://fonts.googleapis.com/css?family=Varela+Round',
        'css/style.css',
    ];
    public $js = [
   
    ];
    public $jsOptions = [
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
