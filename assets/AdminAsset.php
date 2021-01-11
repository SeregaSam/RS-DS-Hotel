<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
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

        'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',

       //'js/scripts.js', 
        

    ];
    public $jsOptions = [
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
