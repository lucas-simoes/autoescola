<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cofiguracoes-form',
        'enableAjaxValidation' => false,
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
        'method'=>'POST',
    ));
    ?>

    <section class="content">
        <div class="box box-primary">
    <?php echo $form->errorSummary($model); ?>

        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        $logo = cofiguracoes::model()->findByAttributes(array('chave' => 'logo'));
                        if (!isset($logo)) {
                            $logo = new cofiguracoes();
                        }
                    ?>
                    <?php if ($logo->valor != '') : ?>
                    <?php echo CHtml::image(Yii::app()->createAbsoluteUrl('/') . '/imgs/' . $logo->valor, '', array('class'=>'img-responsive', 'style'=>'width: 200px')); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">                    
                    <?php echo CHtml::label('Logomarca', 'cofiguracoes[logo]') ?>
                    <?php echo CHtml::fileField('cofiguracoes[logo]', $logo->valor, array('class' => 'form-control')); ?>
                </div>
            </div>
        </div>
        
        <div class="box-footer">         
                <?php echo CHtml::submitButton('Salvar', array('class' => 'btn btn-info')); ?>
        </div>  

    <?php $this->endWidget(); ?>
        </div>
    </section>



</div><!-- form -->