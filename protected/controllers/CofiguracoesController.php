<?php

class CofiguracoesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new cofiguracoes;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                if (isset($_FILES['cofiguracoes'])) {
                    $name = $_FILES['cofiguracoes']['name']; //Atribui uma array com os nomes dos arquivos à variável
                    $tmp_name = $_FILES['cofiguracoes']['tmp_name']; //Atribui uma array com os nomes temporários dos arquivos à variável
                    $diretorio = dirname(Yii::app()->request->scriptFile) . '/imgs';
                    
                    //Verifica se o diretório padrão da aplicação existe (../importacao),
                    //se não existir vai criá-lo
                    if (!file_exists($diretorio)) {
                        mkdir($diretorio);
                    }
                    
                    $arquivo = $diretorio . '/' . $name['logo'];

                    $debug = move_uploaded_file($tmp_name['logo'], $arquivo);
                    
                    if ($debug) {
                        $model = cofiguracoes::model()->findByAttributes(array('chave'=>'logo'));
                        
                        if (!isset($model)) {
                            $model = new cofiguracoes();
                        }
                        
                        $model->chave = key($name);
                        $model->valor = $name['logo'];
                        $model->alteracao = date('Y-m-d H:i:s');
                        
                        $model->save();
                    }
                }                

		if(isset($_POST['cofiguracoes']))
		{   
                    foreach ($_POST['cofiguracoes'] as $key => $value ) {
                        $model->chave = $key;
                        $model->valor = $value;
                        $model->alteracao = date('Y-m-d H:i:s');
                        
                        if (!$model->save()) {
                            
                        }
                    }
			
                    $this->redirect(array('create'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=cofiguracoes::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cofiguracoes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
