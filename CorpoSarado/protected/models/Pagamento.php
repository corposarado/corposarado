<?php

/**
 * This is the model class for table "pagamento".
 *
 * The followings are the available columns in table 'pagamento':
 * @property integer $cod_pagamento
 * @property integer $valor_total
 * @property integer $cod_pedido
 *
 * The followings are the available model relations:
 * @property DataPagamento[] $dataPagamentos
 * @property Pedido $codPedido
 * @property PagamentoAprazo[] $pagamentoAprazos
 * @property PagamentoAvista[] $pagamentoAvistas
 */
class Pagamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagamento the static model class
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
		return 'pagamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('valor_total, cod_pedido', 'required'),
			array('valor_total, cod_pedido', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_pagamento, valor_total, cod_pedido', 'safe', 'on'=>'search'),
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
			'dataPagamentos' => array(self::HAS_MANY, 'DataPagamento', 'cod_pag'),
			'codPedido' => array(self::BELONGS_TO, 'Pedido', 'cod_pedido'),
			'pagamentoAprazos' => array(self::HAS_MANY, 'PagamentoAprazo', 'cod_pag'),
			'pagamentoAvistas' => array(self::HAS_MANY, 'PagamentoAvista', 'cod_pag'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_pagamento' => 'Cod Pagamento',
			'valor_total' => 'Valor Total',
			'cod_pedido' => 'Cod Pedido',
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

		$criteria->compare('cod_pagamento',$this->cod_pagamento);
		$criteria->compare('valor_total',$this->valor_total);
		$criteria->compare('cod_pedido',$this->cod_pedido);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}