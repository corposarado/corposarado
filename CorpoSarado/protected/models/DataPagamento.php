<?php

/**
 * This is the model class for table "data_pagamento".
 *
 * The followings are the available columns in table 'data_pagamento':
 * @property integer $cod_pag
 * @property string $data_pag
 * @property integer $valor_parcela
 *
 * The followings are the available model relations:
 * @property Pagamento $codPag
 */
class DataPagamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DataPagamento the static model class
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
		return 'data_pagamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_pag, data_pag, valor_parcela', 'required'),
			array('cod_pag, valor_parcela', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_pag, data_pag, valor_parcela', 'safe', 'on'=>'search'),
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
			'codPag' => array(self::BELONGS_TO, 'Pagamento', 'cod_pag'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_pag' => 'Cod Pag',
			'data_pag' => 'Data Pag',
			'valor_parcela' => 'Valor Parcela',
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

		$criteria->compare('cod_pag',$this->cod_pag);
		$criteria->compare('data_pag',$this->data_pag,true);
		$criteria->compare('valor_parcela',$this->valor_parcela);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}