<?php

class OrcamentosController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','update','admin','delete', 'inserirItem', 'deleteItem', 'getDadosProduto'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new orcamentos;
                
                if (!isset($_GET['cliente'])) {
                    $cliente = new clientes;
                } else {
                    $cliente = clientes::model()->findByPk($_GET['cliente']);
                }
                
                $model->setAttributes(array(
                    'inclusao'=>date('Y-m-d', time()),
                    'empresasId'=>1,
                    'valorPrazo'=>0,
                    'valorBruto'=>0,
                    'valorDesconto'=>0,
                    'valorLiquido'=>0,
                    'status'=>1,
                    'clientesId'=>$cliente->id,
                    'data'=>date('Y-m-d', time()),
                    'validade'=>date('Y-m-d', strtotime("+30 days")),
                    'usuariosId'=>Yii::app()->user->UserId,
                ));
                
                $itens = new itensorcamento();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['orcamentos']))
		{
			$model->attributes=$_POST['orcamentos'];
			if($model->save()) {
                            
                            $this->redirect(array('update','id'=>$model->orcamentosId));
                            //$this->renderPartial('itens', array('itens'=>$itens));
                        }
		}

		$this->render('create',array(
			'model'=>$model,
                        'cliente'=>$cliente,
                        'itens'=>$itens,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();
                
                $cliente = clientes::model()->findByPk($model->clientesId);
                
                $itens = new itensorcamento;   
                
                $itens->setAttribute('orcamentosId', $model->orcamentosId);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['orcamentos']))
		{
			$model->attributes=$_POST['orcamentos'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->orcamentosId));
		}

		$this->render('update',array(
			'model'=>$model,
                        'cliente'=>$cliente,
                        'itens'=>$itens,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
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
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('orcamentos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new orcamentos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['orcamentos']))
			$model->attributes=$_GET['orcamentos'];

		$this->render('admin',array(
			'model'=>$model,
		));
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
				$this->_model=orcamentos::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='orcamentos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionInserirItem() {
            
            if (isset($_POST['itensorcamento'])) {
                
                $model = orcamentos::model()->findByPk($_POST['itensorcamento']['orcamentosId']);
                
                $cliente = clientes::model()->findByPk($model->clientesId);
                
                $itens = new itensorcamento;   
                
                $itens->setAttribute('orcamentosId', $model->orcamentosId);
                
                $itens = new itensorcamento();
                
                $itens->attributes = $_POST['itensorcamento'];
                
                if ($itens->save()) {
                    $this->redirect(array('update','id'=>$model->orcamentosId));
                } else {
                    $this->render('update',array(
			'model'=>$model,
                        'cliente'=>$cliente,
                        'itens'=>$itens,
                    ));
                }
            }
        }
        
        public function actionDeleteItem() {
            
            $item = itensorcamento::model()->findByPk($_GET['id']);
            
            $orcamentosId = $item->orcamentosId;
            
            $item->delete();
            
            $model = orcamentos::model()->findByPk($orcamentosId);
                
            $cliente = clientes::model()->findByPk($model->clientesId);

            $itens = new itensorcamento;   

            $itens->setAttribute('orcamentosId', $model->orcamentosId);

            $this->redirect(array('update', 'id'=>$model->orcamentosId));
        }
        
        public function actionGetDadosProduto() {
            
            if (isset($_POST['itensorcamento']['produtosId'])) {
            
                $produto = produto_servico::model()->findByPk($_POST['itensorcamento']['produtosId']);

                if (isset($produto)) {

                    $item = new itensorcamento();

                    $item->setAttributes(array(
                        'quantidade'=>1,
                        'valorUnitario'=>$produto->valorAvista,
                        'valorDesconto'=>0,
                        'valorTotalLiquido'=>1 * $produto->valorAvista,
                        'valorTotalPrazo'=>1 * $produto->valorAprazo, 
                    ));
                    
                    $json = CJSON::encode($item);

                    echo $json;
                }
            }
        }
}
