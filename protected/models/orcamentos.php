<?php

/**
 * This is the model class for table "orcamentos".
 *
 * The followings are the available columns in table 'orcamentos':
 * @property integer $orcamentosId
 * @property string $data
 * @property integer $clientesId
 * @property string $valorBruto
 * @property string $valorDesconto
 * @property string $valorLiquido
 * @property integer $status
 * @property integer $usuariosId
 * @property string $validade
 * @property string $valorPrazo
 * @property string $inclusao
 * @property integer $empresasId
 */
class orcamentos extends CActiveRecord
{
    public $statusNome;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orcamentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data, clientesId, valorBruto, valorDesconto, valorLiquido, status, usuariosId, validade, valorPrazo, inclusao, empresasId', 'required'),
			array('clientesId, status, usuariosId, empresasId', 'numerical', 'integerOnly'=>true),
			array('valorBruto, valorDesconto, valorLiquido, valorPrazo', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('orcamentosId, data, clientesId, valorBruto, valorDesconto, valorLiquido, status, usuariosId, validade, valorPrazo, inclusao, empresasId', 'safe', 'on'=>'search'),
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
			'itensorcamentos' => array(self::HAS_MANY, 'itensorcamento', 'orcamentosId'),
			'empresas' => array(self::BELONGS_TO, 'empresas', 'empresasId'),
			'clientes' => array(self::BELONGS_TO, 'clientes', 'clientesId'),
			'usuarios' => array(self::BELONGS_TO, 'usuarios', 'usuariosId'),
			'tituloses' => array(self::HAS_MANY, 'titulos', 'orcamentosId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orcamentosId' => 'Orcamentos',
			'data' => 'Data',
			'clientesId' => 'Clientes',
			'valorBruto' => 'Valor Bruto',
			'valorDesconto' => 'Valor Desconto',
			'valorLiquido' => 'Valor Liquido',
			'status' => 'Status',
			'usuariosId' => 'Usuarios',
			'validade' => 'Validade',
			'valorPrazo' => 'Valor Prazo',
			'inclusao' => 'Inclusao',
			'empresasId' => 'Empresa',
                        'statusNome' => 'Status'
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

		$criteria->compare('orcamentosId',$this->orcamentosId);

		$criteria->compare('data',$this->data,true);

		$criteria->compare('clientesId',$this->clientesId);

		$criteria->compare('valorBruto',$this->valorBruto,true);

		$criteria->compare('valorDesconto',$this->valorDesconto,true);

		$criteria->compare('valorLiquido',$this->valorLiquido,true);

		$criteria->compare('status',$this->status);

		$criteria->compare('usuariosId',$this->usuariosId);

		$criteria->compare('validade',$this->validade,true);

		$criteria->compare('valorPrazo',$this->valorPrazo,true);

		$criteria->compare('inclusao',$this->inclusao,true);

		$criteria->compare('empresasId',$this->empresasId);

		return new CActiveDataProvider('orcamentos', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return orcamentos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function afterFind() {
            
            switch ($this->status) {
                case 1:
                    $this->statusNome = 'Em Aberto';
                    break;
                case 2:
                    $this->statusNome = 'Fechado';
                    break;
                case 3:
                    $this->statusNome = 'Perdido';
                    break;
            }
            
            parent::afterFind();
        }
}