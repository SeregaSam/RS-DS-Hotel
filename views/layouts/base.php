<?php 
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage()?>
<! doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class = "wrap">
        <div class = "container">
            <ul class = "nav nav-pills">
            	<li role= "presentations" class="active"><?= Html::a('Главная',['/index']) ?></li>
            	<li role= "presentations"><?= Html::a('Статьи',['post/index']) ?></li>
            	<li role= "presentations"><?= Html::a('Статья',['post/show']) ?></li>
            </ul>
            <?php  if( isset($this->blocks['block1'])):?>
            <?php echo $this->blocks['block1']?>
            <?php endif;?>
            <?= $content ?>
        </div>
     </div>
     <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
//https://localhost/basic/web/index.php?r=post/show