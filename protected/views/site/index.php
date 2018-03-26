<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2>Auto Escola</h2>

<?php
    $logo = cofiguracoes::model()->findByAttributes(array('chave' => 'logo'));
    if (!isset($logo)) {
        $logo = new cofiguracoes();
    }
?>
<?php if ($logo->valor != '') : ?>
<?php //echo CHtml::image(Yii::app()->createAbsoluteUrl('/') . '/imgs/' . $logo->valor, '', array('class'=>'img-responsive')); ?>
<div class="container-fluid" background="'<?php echo Yii::app()->createAbsoluteUrl('/') . '/imgs/' . $logo->valor; ?>'"></div>
<?php endif; ?>

