<?php

/**
 * This is the model class for table "produto_servico".
 *
 * The followings are the available columns in table 'produto_servico':
 * @property integer $id
 * @property string $descricao
 * @property double $valorAvista
 * @property double $valorAprazo
 * @property integer $produtoAutoEscola
 * @property integer $empresasId
 */
class produto_servico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produto_servico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, produtoAutoEscola,empresasId', 'required'),
			array('produtoAutoEscola', 'numerical', 'integerOnly'=>true),
			array('valorAvista, valorAprazo', 'numerical'),
			array('descricao', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, valorAvista, valorAprazo, produtoAutoEscola,empresasId', 'safe', 'on'=>'search'),
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
			'itensorcamentos' => array(self::HAS_MANY, 'Itensorcamento', 'produtosId'),
			'tituloses' => array(self::HAS_MANY, 'Titulos', 'produtosId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Código',
			'descricao' => 'Descrição',
			'valorAvista' => 'Valor A Vista',
			'valorAprazo' => 'Valor A Prazo',
			'produtoAutoEscola' => 'Auto Escola?',
                        'empresasId' => 'Empresa',
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

		$criteria->compare('descricao',$this->descricao,true);

		$criteria->compare('valorAvista',$this->valorAvista);

		$criteria->compare('valorAprazo',$this->valorAprazo);

		$criteria->compare('produtoAutoEscola',$this->produtoAutoEscola);
                
                if (Yii::app()->user->isAdmin){
                    $criteria->compare('empresasId',$this->empresasId);
                }else{
                    $criteria->compare('empresasId', Yii::app()->user->Empresa, true);
                }

		return new CActiveDataProvider('produto_servico', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return produto_servico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}