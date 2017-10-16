<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $nome
 * @property integer $cpf
 * @property string $nascimento
 * @property integer $fixo
 * @property integer $celular
 * @property string $endereco
 * @property integer $numero
 * @property string $bairro
 * @property integer $cidadeId
 * @property integer $cep
 * @property string $email
 * @property integer $empresasId
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
			array('nome, cpf, endereco, numero, bairro, cidadeId, cep, empresasId', 'required'),
			array('cpf, fixo, celular, numero, cidadeId, cep, empresasId', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>150),
			array('endereco', 'length', 'max'=>80),
			array('bairro', 'length', 'max'=>2),
			array('email', 'length', 'max'=>100),
			array('nascimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, cpf, nascimento, fixo, celular, endereco, numero, bairro, cidadeId, cep, email, empresasId', 'safe', 'on'=>'search'),
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
			'id' => 'Id',
			'nome' => 'Nome',
			'cpf' => 'Cpf',
			'nascimento' => 'Nascimento',
			'fixo' => 'Fixo',
			'celular' => 'Celular',
			'endereco' => 'Endereco',
			'numero' => 'Numero',
			'bairro' => 'Bairro',
			'cidadeId' => 'Cidade',
			'cep' => 'Cep',
			'email' => 'Email',
			'empresasId' => 'Empresas',
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

		$criteria->compare('cpf',$this->cpf);

		$criteria->compare('nascimento',$this->nascimento,true);

		$criteria->compare('fixo',$this->fixo);

		$criteria->compare('celular',$this->celular);

		$criteria->compare('endereco',$this->endereco,true);

		$criteria->compare('numero',$this->numero);

		$criteria->compare('bairro',$this->bairro,true);

		$criteria->compare('cidadeId',$this->cidadeId);

		$criteria->compare('cep',$this->cep);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('empresasId',$this->empresasId);

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
}