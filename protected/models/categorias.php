<?php

/**
 * This is the model class for table "categorias".
 *
 * The followings are the available columns in table 'categorias':
 * @property integer $id
 * @property string $nome
 * @property integer $empresasId
 */
class categorias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'categorias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, empresasId', 'required'),
			array('empresasId', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, empresasId', 'safe', 'on'=>'search'),
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
                    'itenscategoria' => array(self::HAS_MANY, 'itenscategoria', 'categoriasId'),
                    'empresas' => array(self::BELONGS_TO, 'empresas', 'empresasId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'nome' => 'Categoria',
			'empresasId' => 'Empresa',
                        'empresas.nome' => 'Empresa'
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

		$criteria->compare('empresasId',$this->empresasId);

		return new CActiveDataProvider('categorias', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return categorias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}