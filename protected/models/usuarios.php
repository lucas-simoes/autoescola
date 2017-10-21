<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $nome
 * @property string $cpf
 * @property string $nascimento
 * @property string $telefone
 * @property string $endereco
 * @property string $bairro
 * @property integer $cidadeId
 * @property string $cep
 * @property string $email
 * @property integer $empresasId
 * @property string $login
 * @property string $senha
 * @property string $uf 
 */
class usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cpf, endereco, bairro, cidadeId, cep, empresasId, login, senha, uf', 'required'),
			array('cidadeId, empresasId', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>150),
			array('endereco', 'length', 'max'=>80),
			array('bairro', 'length', 'max'=>40),
			array('email', 'length', 'max'=>100),
                        array('telefone', 'length', 'max'=>20),
                        array('login', 'length', 'max'=>20),
			array('senha', 'length', 'max'=>120),
                        array('uf', 'length', 'max'=>2),
                        array('cpf', 'length', 'max'=>20),
                        array('cep', 'length', 'max'=>10),
			array('nascimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, cpf, nascimento, telefone, endereco, bairro, cidadeId, cep, email, empresasId, login', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'orcamentoses' => array(self::HAS_MANY, 'Orcamentos', 'usuariosId'),
			'cidade' => array(self::BELONGS_TO, 'Cidades', 'cidadeId'),
			'empresas' => array(self::BELONGS_TO, 'Empresas', 'empresasId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Código',
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'nascimento' => 'Nascimento',
			'telefone' => 'Telefone',
			'endereco' => 'Endereço',
			'bairro' => 'Bairro',
			'cidadeId' => 'Cidade',
                        'cidade.nome' => 'Cidade',
			'cep' => 'Cep',
			'email' => 'Email',
			'empresasId' => 'Empresa',
                        'empresas.nome' => 'Empresa',
                        'login' => 'Login',
			'senha' => 'Senha',
                        'uf' => 'UF',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('cpf',$this->cpf, true);

		$criteria->compare('nascimento',$this->nascimento,true);

		$criteria->compare('telefone',$this->telefone,true);

		$criteria->compare('endereco',$this->endereco,true);

		$criteria->compare('bairro',$this->bairro,true);

		$criteria->compare('cidadeId',$this->cidadeId);

		$criteria->compare('cep',$this->cep, true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('empresasId',$this->empresasId);
                
                $criteria->compare('login',$this->login,true);

		$criteria->compare('senha',$this->senha,true);
                
                $criteria->compare('uf',$this->uf,true);

		return new CActiveDataProvider('usuarios', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function afterFind() {
            
            //Adiciona as mascaras de CNPJ e Telefone
             
            $this->cpf = Yii::app()->functions->mask($this->cpf, '###.###.###-##'); 
            
            if (strlen($this->telefone) == 11) {
                $this->telefone = Yii::app()->functions->mask($this->telefone, '(##) #####-####');
            }else if (strlen($this->telefone) == 10) {
                $this->telefone = Yii::app()->functions->mask($this->telefone, '(##) ####-####');
            }
                
            
            parent::afterFind();
        }
}