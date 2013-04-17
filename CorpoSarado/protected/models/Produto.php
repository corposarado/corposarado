<?php

/**
 * This is the model class for table "produto".
 *
 * The followings are the available columns in table 'produto':
 * @property integer $cod_prod
 * @property double $valor_comercial
 * @property double $valor_venda
 * @property string $descricao_prod
 * @property integer $codfabricante
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 * @property Fabricante $codfabricante0
 */
class Produto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Produto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'produto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_prod, valor_comercial, valor_venda, descricao_prod, codfabricante', 'required'),
			array('cod_prod, codfabricante', 'numerical', 'integerOnly'=>true),
			array('valor_comercial, valor_venda', 'numerical'),
			array('descricao_prod', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_prod, valor_comercial, valor_venda, descricao_prod, codfabricante', 'safe', 'on'=>'search'),
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
			'pedidos' => array(self::MANY_MANY, 'Pedido', 'item(cod_produto, cod_pedido)'),
			'codfabricante0' => array(self::BELONGS_TO, 'Fabricante', 'codfabricante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_prod' => 'Cod Prod',
			'valor_comercial' => 'Valor Comercial',
			'valor_venda' => 'Valor Venda',
			'descricao_prod' => 'Descricao Prod',
			'codfabricante' => 'Codfabricante',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cod_prod',$this->cod_prod);
		$criteria->compare('valor_comercial',$this->valor_comercial);
		$criteria->compare('valor_venda',$this->valor_venda);
		$criteria->compare('descricao_prod',$this->descricao_prod,true);
		$criteria->compare('codfabricante',$this->codfabricante);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}