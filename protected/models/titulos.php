<?php

/**
 * This is the model class for table "titulos".
 *
 * The followings are the available columns in table 'titulos':
 * @property integer $titulosId
 * @property string $valor
 * @property integer $parcelas
 * @property string $vencimento
 * @property integer $orcamentosId
 * @property integer $produtosId
 */
class titulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'titulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('valor, parcelas, vencimento, orcamentosId, produtosId', 'required'),
			array('parcelas, orcamentosId, produtosId', 'numerical', 'integerOnly'=>true),
			array('valor', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('titulosId, valor, parcelas, vencimento, orcamentosId, produtosId', 'safe', 'on'=>'search'),
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
			'produtos' => array(self::BELONGS_TO, 'ProdutoServico', 'produtosId'),
			'orcamentos' => array(self::BELONGS_TO, 'Orcamentos', 'orcamentosId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'titulosId' => 'Titulos',
			'valor' => 'Valor',
			'parcelas' => 'Parcelas',
			'vencimento' => 'Vencimento',
			'orcamentosId' => 'Orcamentos',
			'produtosId' => 'Produtos',
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

		$criteria->compare('titulosId',$this->titulosId);

		$criteria->compare('valor',$this->valor,true);

		$criteria->compare('parcelas',$this->parcelas);

		$criteria->compare('vencimento',$this->vencimento,true);

		$criteria->compare('orcamentosId',$this->orcamentosId);

		$criteria->compare('produtosId',$this->produtosId);

		return new CActiveDataProvider('titulos', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return titulos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}