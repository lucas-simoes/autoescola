<section class="content">
    <script src="<?php echo Yii::app()->baseUrl . '/ckeditor/ckeditor.js'; ?>"></script>
    <div class="row">
        <div class="col-md-12"><div class="box-body">
                <div class="col-md-12">
                    <div class="form-group">                                                
                        <?php echo CHtml::textArea('texto', $model, array('id' => 'texto',
                        'rows' => 35, 'cols' => 50, 'class' => "form-control")); ?>
                    </div>
                </div>                            
            </div>                            
        </div>
        
        <script type="text/javascript">
            CKEDITOR.replace('texto',     {               
                                       coreStyles_bold : { element : 'b' },
                                       height: '700px',                                       
                                       expand : true,
                                       enterMode: CKEDITOR.ENTER_P,
                                       shiftEnterMode  : CKEDITOR.ENTER_BR
                               });
        </script>
    </div>                           
</section>