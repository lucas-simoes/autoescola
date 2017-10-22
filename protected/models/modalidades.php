<?php

/**
 * This is the model class for table "modalidades".
 *
 * The followings are the available columns in table 'modalidades':
 * @property integer $modalidadesId
 * @property string $nome
 * @property integer $prazo
 */
class modalidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modalidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, prazo', 'required'),
			array('prazo', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('modalidadesId, nome, prazo', 'safe', 'on'=>'search'),
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
			'itensorcamentos' => array(self::HAS_MANY, 'Itensorcamento', 'modalidadesId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'modalidadesId' => 'Código',
			'nome' => 'Nome',
			'prazo' => 'A Prazo?',
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

		$criteria->compare('modalidadesId',$this->modalidadesId);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('prazo',$this->prazo);

		return new CActiveDataProvider('modalidades', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return modalidades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}