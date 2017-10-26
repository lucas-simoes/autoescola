<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property integer $id
 * @property string $nome
 * @property string $cpfCnpj
 * @property string $nascimento
 * @property string $telefone
 * @property string $endereco
 * @property string $bairro
 * @property string uf
 * @property integer $cidadeId
 * @property string $cep
 * @property string $email
 * @property integer $empresasId
 */
class clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cpfCnpj, endereco, bairro, uf, cidadeId, cep, empresasId', 'required'),
			array('cidadeId, empresasId', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>150),
                        array('cpfCnpj, telefone', 'length', 'max'=>20),
			array('endereco', 'length', 'max'=>80),
                        array('bairro', 'length', 'max'=>40),
			array('uf', 'length', 'max'=>2),
                        array('cep', 'length', 'max'=>10),
			array('email', 'length', 'max'=>100),
			array('nascimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, cpfCnpj, nascimento, fixo, celular, endereco, numero, bairro, uf, cidadeId, cep, email, empresasId', 'safe', 'on'=>'search'),
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
			'empresas' => array(self::BELONGS_TO, 'Empresas', 'empresasId'),
			'cidade' => array(self::BELONGS_TO, 'Cidades', 'cidadeId'),
			'orcamentoses' => array(self::HAS_MANY, 'Orcamentos', 'clientesId'),
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
			'cpfCnpj' => 'Cpf/Cnpj',
			'nascimento' => 'Nascimento',
			'telefone' => 'Telefone',
			'endereco' => 'Endereco',
			'bairro' => 'Bairro',
			'uf' => 'UF',
			'cidadeId' => 'Cidade',
                        'cidade.nome' => 'Cidade',
			'cep' => 'Cep',
			'email' => 'Email',
			'empresasId' => 'Empresas',
                        'empresas.nome' => 'Empresa',
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

		$criteria->compare('cpfCnpj',$this->cpfCnpj,true);

		$criteria->compare('nascimento',$this->nascimento,true);

		$criteria->compare('telefone',$this->telefone, true);

		$criteria->compare('endereco',$this->endereco,true);

		$criteria->compare('bairro',$this->bairro,true);

		$criteria->compare('uf',$this->uf,true);

		$criteria->compare('cidadeId',$this->cidadeId);

		$criteria->compare('cep',$this->cep, true);

		$criteria->compare('email',$this->email,true);
                
                if (Yii::app()->user->isAdmin){
                    $criteria->compare('empresasId',$this->empresasId);
                }else{
                    $criteria->compare('empresasId', Yii::app()->user->Empresa, true);
                }
                
                
                
		

		return new CActiveDataProvider('clientes', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}