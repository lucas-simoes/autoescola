<?php

class CategoriasController extends Controller
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
		$model=new categorias;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                $itens = new itenscategoria();

		if(isset($_POST['categorias']))
		{
			$model->attributes=$_POST['categorias'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                $itens = new itenscategoria;   
                
                $itens->setAttribute('categoriasId', $model->id);

		if(isset($_POST['categorias']))
		{
			$model->attributes=$_POST['categorias'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
                        'itens'=>$itens,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(!Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('categorias');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new categorias('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['categorias']))
			$model->attributes=$_GET['categorias'];

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
				$this->_model=categorias::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='categorias-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionInserirItem() {
            
            if (isset($_POST['itenscategoria'])) {
                
                $model = categorias::model()->findByPk($_POST['itenscategoria']['categoriasId']);               
                                
                $itens = new itenscategoria;   
                
                $itens->setAttribute('categoriasId', $model->id);
                
                $itens = new itenscategoria();
                
                $itens->attributes = $_POST['itenscategoria'];
                
                if ($itens->save()) {
                    $this->redirect(array('update','id'=>$model->id));
                } else {
                    $this->render('update',array(
			'model'=>$model,
                        'itens'=>$itens,
                    ));
                }
            }
        }
        
        public function actionDeleteItem() {
            
            $item = itenscategoria::model()->findByPk($_GET['id']);
            
            $categoriasId = $item->categoriasId;
            
            $item->delete();
            
            $model = categorias::model()->findByPk($categoriasId);
                
            $itens = new itenscategoria;   

            $itens->setAttribute('categoriasId', $model->id);

            $this->redirect(array('update', 'id'=>$model->id));
        }
        
        public function actionGetDadosProduto() {
            
            if (isset($_POST['itenscategoria']['produtosId'])) {
            
                $produto = produto_servico::model()->findByPk($_POST['itenscategoria']['produtosId']);

                if (isset($produto)) {

                    $item = new itenscategoria();

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
