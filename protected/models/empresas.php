<?php

/**
 * This is the model class for table "empresas".
 *
 * The followings are the available columns in table 'empresas':
 * @property integer $empresasId
 * @property string $nome
 * @property string $endereco
 * @property string $bairro
 * @property integer $cidadeId
 * @property string $cep
 * @property string $telefone
 * @property string $cnpj
 * @property string $email
 * @property string $uf
 */
class empresas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, endereco, bairro, cidadeId, cep, telefone, cnpj, email, uf', 'required'),
			array('cidadeId', 'numerical', 'integerOnly'=>true),
			array('nome, endereco, email', 'length', 'max'=>80),
			array('bairro', 'length', 'max'=>40),
			array('cep', 'length', 'max'=>10),
			array('telefone, cnpj', 'length', 'max'=>20),
			array('uf', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('empresasId, nome, endereco, bairro, cidadeId, cep, telefone, cnpj, email, uf', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Clientes', 'empresasId'),
			'cidade' => array(self::BELONGS_TO, 'Cidades', 'cidadeId'),
			'orcamentoses' => array(self::HAS_MANY, 'Orcamentos', 'empresasId'),
			'usuarioses' => array(self::HAS_MANY, 'Usuarios', 'empresasId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empresasId' => 'Empresas',
			'nome' => 'Nome',
			'endereco' => 'Endereco',
			'bairro' => 'Bairro',
			'cidadeId' => 'Cidade',
			'cep' => 'Cep',
			'telefone' => 'Telefone',
			'cnpj' => 'Cnpj',
			'email' => 'Email',
			'uf' => 'Uf',
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

		$criteria->compare('empresasId',$this->empresasId);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('endereco',$this->endereco,true);

		$criteria->compare('bairro',$this->bairro,true);

		$criteria->compare('cidadeId',$this->cidadeId);

		$criteria->compare('cep',$this->cep,true);

		$criteria->compare('telefone',$this->telefone,true);

		$criteria->compare('cnpj',$this->cnpj,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('uf',$this->uf,true);

		return new CActiveDataProvider('empresas', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return empresas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}