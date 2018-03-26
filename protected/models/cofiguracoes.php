<?php

/**
 * This is the model class for table "cofiguracoes".
 *
 * The followings are the available columns in table 'cofiguracoes':
 * @property integer $id
 * @property string $chave
 * @property string $valor
 * @property string $alteracao
 */
class cofiguracoes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cofiguracoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('chave, valor', 'required'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, chave, valor, alteracao', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'chave' => 'Chave',
			'valor' => 'Valor',
			'alteracao' => 'Alteracao',
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

		$criteria->compare('chave',$this->chave,true);

		$criteria->compare('valor',$this->valor,true);

		$criteria->compare('alteracao',$this->alteracao,true);

		return new CActiveDataProvider('cofiguracoes', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return cofiguracoes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}