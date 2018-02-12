<?php

/**
 * This is the model class for table "contratos".
 *
 * The followings are the available columns in table 'contratos':
 * @property integer $id
 * @property string $nome
 * @property string $texto
 * @property integer $categoria
 */
class contratos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, texto, categoria', 'required'),
			array('id, categoria', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, texto, categoria', 'safe', 'on'=>'search'),
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
			'categoria0' => array(self::BELONGS_TO, 'Categorias', 'categoria'),
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
			'texto' => 'Texto',
			'categoria' => 'Categoria',
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

		$criteria->compare('texto',$this->texto,true);

		$criteria->compare('categoria',$this->categoria);

		return new CActiveDataProvider('contratos', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return contratos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}