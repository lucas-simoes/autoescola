<?php

class OrcamentosController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @var CActiveRecord the currently loaded data model instance.
     */
    private $_model;

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'create', 'update', 'admin', 'delete', 'inserirItem', 'deleteItem', 'getDadosProduto', 'sendnotify', 'showcontract'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('testesms'),
                'users' => array('@')
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     */
    public function actionView() {
        $model = $this->loadModel();
            
                $itens = new itensorcamento();
                
                $itens->setAttribute('orcamentosId', $model->orcamentosId);
                
                $titulos = new titulos();
                
                $titulos->setAttribute('_orcamentosId', $model->orcamentosId);
                
                $cs = Yii::app()->clientScript;
                $cs->registerScript('imprimir', 'window.print();', CClientScript::POS_READY);
  
                $this->render('view',array(
			'model'=>$model,
                        'itens'=>$itens,
                        'titulos'=>$titulos,
		));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new orcamentos;

        if (!isset($_GET['cliente'])) {
            $cliente = new clientes;
        } else {
            $cliente = clientes::model()->findByPk($_GET['cliente']);
        }

        $model->setAttributes(array(
            'inclusao' => date('Y-m-d', time()),
            'empresasId' => 1,
            'valorPrazo' => 0,
            'valorBruto' => 0,
            'valorDesconto' => 0,
            'valorLiquido' => 0,
            'status' => 1,
            'clientesId' => $cliente->id,
            'data' => date('Y-m-d', time()),
            'validade' => date('Y-m-d', strtotime("+30 days")),
            'usuariosId' => Yii::app()->user->UserId,
        ));

        $itens = new itensorcamento();
        $titulos = new titulos();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['orcamentos'])) {
            $model->attributes = $_POST['orcamentos'];
            if ($model->save()) {
                if ((isset($_POST['orcamentos']['categoriaid'])) && ($_POST['orcamentos']['categoriaid'] != '')) {

                    $setItens = itenscategoria::model()->findAllByAttributes(array('categoriasId' => $_POST['orcamentos']['categoriaid']));

                    foreach ($setItens as $singleItem) {

                        $catItens = new itensorcamento();

                        $catItens->attributes = $singleItem->attributes;

                        $catItens->setAttribute('orcamentosId', $model->orcamentosId);

                        if ($catItens->save()) {

                            $setTitulos = new titulos();

                            $setTitulos->setAttributes(array(
                                'valor' => $catItens->valorTotalLiquido,
                                'parcelas' => 1,
                                'vencimento' => $model->data,
                                'itensorcamentoId' => $catItens->itensId,
                                'produtosId' => $catItens->produtosId,
                                'valorParcela' => $catItens->valorTotalLiquido
                            ));

                            $setTitulos->save();

                            $model->setAttribute('valorBruto', $model->valorPrazo + $catItens->valorTotalPrazo);
                            $model->setAttribute('valorLiquido', $model->valorLiquido + $catItens->valorTotalLiquido);
                            $model->setAttribute('valorPrazo', $model->valorPrazo + $catItens->valorTotalPrazo);

                            $valorDesconto = $model->valorPrazo - $model->valorLiquido;
                            $desconto = round($valorDesconto / $model->valorPrazo * 100, 2);

                            $model->setAttribute('valorDesconto', $desconto);

                            $model->save();
                        }
                    }
                }

                $this->redirect(array('update', 'id' => $model->orcamentosId));
                //$this->renderPartial('itens', array('itens'=>$itens));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'cliente' => $cliente,
            'itens' => $itens,
            'titulos' => $titulos,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     */
    public function actionUpdate() {
        $model = $this->loadModel();

        $cliente = clientes::model()->findByPk($model->clientesId);

        $itens = new itensorcamento();

        $itens->setAttribute('orcamentosId', $model->orcamentosId);

        $titulos = new titulos();

        $titulos->setAttribute('_orcamentosId', $model->orcamentosId);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['orcamentos'])) {
            $model->attributes = $_POST['orcamentos'];
            if ($model->save())
                $this->redirect(array('update', 'id' => $model->orcamentosId));
        }

        $this->render('update', array(
            'model' => $model,
            'cliente' => $cliente,
            'itens' => $itens,
            'titulos' => $titulos,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     */
    public function actionDelete() {
        if (!Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel()->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('orcamentos');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new orcamentos('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['orcamentos']))
            $model->attributes = $_GET['orcamentos'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     */
    public function loadModel() {
        if ($this->_model === null) {
            if (isset($_GET['id']))
                $this->_model = orcamentos::model()->findbyPk($_GET['id']);
            if ($this->_model === null)
                throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $this->_model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'orcamentos-form') {
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

            $itens->attributes = $_POST['itensorcamento'];

            $model->setAttribute('valorBruto', $model->valorPrazo + $itens->valorTotalPrazo);
            $model->setAttribute('valorLiquido', $model->valorLiquido + $itens->valorTotalLiquido);
            $model->setAttribute('valorPrazo', $model->valorPrazo + $itens->valorTotalPrazo);

            $valorDesconto = $model->valorPrazo - $model->valorLiquido;
            $desconto = round($valorDesconto / $model->valorPrazo * 100, 2);

            $model->setAttribute('valorDesconto', $desconto);

            $model->attributes;

            if ($itens->save()) {
                $titulos = new titulos();

                $titulos->attributes = $_POST['titulos'];

                $titulos->setAttribute('valor', $itens->valorTotalLiquido);
                $titulos->setAttribute('itensorcamentoId', $itens->itensId);
                $titulos->setAttribute('produtosId', $itens->produtosId);

                if ($titulos->save()) {
                    $model->save();
                    $this->redirect(array('update', 'id' => $model->orcamentosId));
                } else {
                    $this->render('update', array(
                        'model' => $model,
                        'cliente' => $cliente,
                        'itens' => $itens,
                        'titulos' => $titulos,
                    ));
                }
            } else {
                $titulos = new titulos();
                $titulos->attributes = $_POST['titulos'];
                $titulos->setAttribute('valor', $itens->valorTotalLiquido);
                $titulos->setAttribute('itensorcamentoId', $itens->itensId);
                $titulos->setAttribute('produtosId', $itens->produtosId);
                $this->render('update', array(
                    'model' => $model,
                    'cliente' => $cliente,
                    'itens' => $itens,
                    'titulos' => $titulos,
                ));
            }
        }
    }

    public function actionDeleteItem() {

        $item = itensorcamento::model()->findByPk($_GET['id']);

        $orcamentosId = $item->orcamentosId;

        $model = orcamentos::model()->findByPk($orcamentosId);

        $cliente = clientes::model()->findByPk($model->clientesId);

        $model->setAttribute('valorBruto', $model->valorPrazo - $item->valorTotalPrazo);
        $model->setAttribute('valorLiquido', $model->valorLiquido - $item->valorTotalLiquido);
        $model->setAttribute('valorPrazo', $model->valorPrazo - $item->valorTotalPrazo);

        $valorDesconto = $model->valorPrazo - $model->valorLiquido;
        $desconto = round($valorDesconto / $model->valorPrazo * 100, 2);

        $model->setAttribute('valorDesconto', $desconto);

        $model->save();

        $item->delete();

        $itens = new itensorcamento;

        $itens->setAttribute('orcamentosId', $model->orcamentosId);

        $this->redirect(array('update', 'id' => $model->orcamentosId));
    }

    public function actionGetDadosProduto() {

        if (isset($_POST['itensorcamento']['produtosId'])) {

            $produto = produto_servico::model()->findByPk($_POST['itensorcamento']['produtosId']);

            if (isset($produto)) {

                $item = new itensorcamento();

                $item->setAttributes(array(
                    'quantidade' => 1,
                    'valorUnitario' => number_format($produto->valorAvista, 2, '.', ','),
                    'valorDesconto' => 0,
                    'valorTotalLiquido' => number_format(1 * $produto->valorAvista, 2, '.', ','),
                    'valorTotalPrazo' => number_format(1 * $produto->valorAvista, 2, '.', ','),
                ));

                $json = CJSON::encode($item);

                echo $json;
            }
        }
    }

    public function actionTesteSms() {

        $objLista = new listaMSG();

        $lista = new msgSms();
        $lista->celular = '5533984399259';
        $lista->cnpjConta = '41218264000101';
        $lista->cnpjEmpresa = '41218264000101';
        $lista->data = date('Y-m-d H:i:s', time());
        $lista->msg = 'Mensâgem de Téste Avulça';
        $lista->senha = '123456';
        $lista->refExterna = '123';

        $objLista->setLista($lista);

        $lista = new msgSms();
        $lista->celular = '5533984399259';
        $lista->cnpjConta = '41218264000101';
        $lista->cnpjEmpresa = '41218264000101';
        $lista->data = date('Y-m-d H:i:s', time());
        $lista->msg = 'Nova Mensagem';
        $lista->senha = '123456';
        $lista->refExterna = '123';

        $objLista->setLista($lista);

        $objMsg = new listaSms($objLista);
        $objMsg->agendado = 0;

        //Envio de multiplos SMS
        //SMS::sendListSMS($objMsg);
        //Envio de um único SMS
        //SMS::sendSingleSMS($lista);

        $email = new Email();

        $email->para = 'lucas_development@outlook.com';
        $email->assunto = 'Teste de Envio de Email';
        $email->mensagem = 'Mensagem de Teste';
        $email->nomeRemetente = 'CFC California';
        $email->emailRemetente = 'contato@cfccalifornia.xyz';

        $email->send();
    }

    public function actionSendNotify() {

        if (isset($_POST['orcamentos'])) {
            $cliente = clientes::model()->findByPk($_POST['orcamentos']['clientesId']);

            try {

                $msgSMS = 'CFC California: Orcamento Valor ' . $_POST['orcamentos']['valorLiquido'];
                $msgSMS .= ' Data ' . date('d/m/Y', strtotime($_POST['orcamentos']['data']));
                $msgSMS .= ' Validade ' . date('d/m/Y', strtotime($_POST['orcamentos']['validade']));

                if ($_POST['clientes']['telefone']) {

                    $telefone = Functions::removeMascara($_POST['clientes']['telefone']);

                    $lista = new msgSms();
                    $lista->celular = '55' . $telefone;
                    $lista->cnpjConta = Yii::app()->params['cnpjSMS'];
                    $lista->cnpjEmpresa = Yii::app()->params['cnpjSMS'];
                    $lista->data = date('Y-m-d H:i:s', time());
                    $lista->msg = $msgSMS;
                    $lista->senha = Yii::app()->params['senhaSMS'];
                    $lista->refExterna = $_POST['orcamentos']['orcamentosId'];

                    SMS::sendSingleSMS($lista);
                }

                $email = new Email();

                $email->para = $cliente->email;
                $email->assunto = 'Informativo CFC Califórnia';
                $email->mensagem = $msgSMS;
                $email->nomeRemetente = 'CFC California';
                $email->emailRemetente = 'contato@cfccalifornia.xyz';

                if (!@$email->send()) {
                    throw new Exception();
                }

                $msg = 'Notificação Enviada com Sucesso';
            } catch (Exception $exc) {
                $msg = 'Falha ao enviar notificação';
            } finally {
                echo CJSON::encode(array('msg' => $msg));
            }
        }
    }

    public function actionShowContract() {
        $orcamentosID = $_GET['orcamentosID'];

        $orcamento = orcamentos::model()->findByPk($orcamentosID);


        if (isset($_GET['orcamentosID'])) {
            $cliente = clientes::model()->findByPk($orcamento->clientesId);

            if ($cliente->clientIsValid()) {
                #Orçamento fechado...
                $orcamento->status = 2;

                $orcamento->save();

                $empresa = empresas::model()->findByPk($orcamento->empresasId);

                $cidade = cidades::model()->findByPk($empresa->cidadeId);

                $cidadeCliente = cidades::model()->findByPk($cliente->cidadeId);

                $contrato = contratos::model()->find('categoria=?', array(strtolower($orcamento->categoriaid)));

                $texto = $contrato->texto;


                #CLIENTE#
                ##CPF#
                ##IDENTIDADE#
                ##ENDERECO CLIENTE#
                //Rua Alcindo Pereira, nº. 38, Bairro – Centro, Guanhães/MG – CEP 39.740-000. 

                $texto = str_replace('#CFC#', $empresa->nome, $texto);
                $texto = str_replace('#CNPJ CFC#', $empresa->cnpj, $texto);
                $texto = str_replace('#NOME FANTASIA#', $empresa->nome, $texto);
                $texto = str_replace('#ENDERECO CFC#', $empresa->endereco . ", " . $empresa->bairro . ", " . $cidade->nome . "/" . $empresa->uf . " - CEP" . $empresa->cep, $texto);

                //EDILENE PEREIRA DE JESUS, brasileiro (a), divorciada (a), repositora, 

                $texto = str_replace('#CLIENTE#', $cliente->nome . ", " . $cliente->nacionalidade . ", " . $cliente->estadoCivil . "/" . $cliente->profissao, $texto);

                $texto = str_replace('#CPF#', $cliente->cpfCnpj, $texto);

                $texto = str_replace('#IDENTIDADE#', $cliente->identidade, $texto);

                $texto = str_replace('#ENDERECO CLIENTE#', $cliente->endereco . ", " . $cliente->bairro . ", " . $cidadeCliente->nome . "/" . $cliente->uf . " - CEP" . $cliente->cep, $texto);

                #(Dois mil, trezentos e treze reais e sessenta centavos), 

                $texto = str_replace("#VALOR CONTRATO#", $orcamento->valorLiquido . "(" . Functions::extenso($orcamento->valorLiquido) . ")", $texto);

                $this->render('showcontract', array('model' => $texto));
            } else {
                
                $model = new orcamentos;
                $model->orcamentosId = $_GET['orcamentosID'];
                $this->redirect(array('update', 'id' => $model->orcamentosId));
            }
        }
    }

}
