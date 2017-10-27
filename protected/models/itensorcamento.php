<?php

/**
 * This is the model class for table "itensorcamento".
 *
 * The followings are the available columns in table 'itensorcamento':
 * @property integer $itensId
 * @property integer $orcamentosId
 * @property integer $produtosId
 * @property string $quantidade
 * @property string $valorUnitario
 * @property string $valorDesconto
 * @property string $valorTotalLiquido
 * @property string $valorTotalPrazo
 * @property integer $modalidadesId
 */
class itensorcamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'itensorcamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('orcamentosId, produtosId, quantidade, valorUnitario, valorDesconto, valorTotalLiquido, valorTotalPrazo, modalidadesId', 'required'),
			array('orcamentosId, produtosId, modalidadesId', 'numerical', 'integerOnly'=>true),
			array('quantidade, valorUnitario, valorDesconto, valorTotalLiquido, valorTotalPrazo', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('itensId, orcamentosId, produtosId, quantidade, valorUnitario, valorDesconto, valorTotalLiquido, valorTotalPrazo, modalidadesId', 'safe', 'on'=>'search'),
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
			'modalidades' => array(self::BELONGS_TO, 'modalidades', 'modalidadesId'),
			'orcamentos' => array(self::BELONGS_TO, 'orcamentos', 'orcamentosId'),
			'produtos' => array(self::BELONGS_TO, 'produto_servico', 'produtosId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'itensId' => 'Itens',
			'orcamentosId' => 'Orcamentos',
			'produtosId' => 'Cód. Produto/Serviço',
			'quantidade' => 'Quantidade',
			'valorUnitario' => 'Valor Unitario',
			'valorDesconto' => 'Desconto (%)',
			'valorTotalLiquido' => 'Total Liquido',
			'valorTotalPrazo' => 'Total Prazo',
			'modalidadesId' => 'Modalidade',
                        'modalidades.nome' => 'Modalidade',
                        'produtos.descricao' => 'Produto/Serviço'
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

		$criteria->compare('itensId',$this->itensId);

		$criteria->compare('orcamentosId',$this->orcamentosId);

		$criteria->compare('produtosId',$this->produtosId);

		$criteria->compare('quantidade',$this->quantidade,true);

		$criteria->compare('valorUnitario',$this->valorUnitario,true);

		$criteria->compare('valorDesconto',$this->valorDesconto,true);

		$criteria->compare('valorTotalLiquido',$this->valorTotalLiquido,true);

		$criteria->compare('valorTotalPrazo',$this->valorTotalPrazo,true);

		$criteria->compare('modalidadesId',$this->modalidadesId);

		return new CActiveDataProvider('itensorcamento', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return itensorcamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}