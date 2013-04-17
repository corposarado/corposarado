<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $cod_produto
 * @property integer $cod_pedido
 * @property string $data_retirada
 * @property double $valorunitario
 * @property double $desconto
 * @property integer $quantidade
 */
class Item extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Item the static model class
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
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_produto, cod_pedido, data_retirada, valorunitario, quantidade', 'required'),
			array('cod_produto, cod_pedido, quantidade', 'numerical', 'integerOnly'=>true),
			array('valorunitario, desconto', 'numerical'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_produto, cod_pedido, data_retirada, valorunitario, desconto, quantidade', 'safe', 'on'=>'search'),
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
			'cod_produto' => 'Cod Produto',
			'cod_pedido' => 'Cod Pedido',
			'data_retirada' => 'Data Retirada',
			'valorunitario' => 'Valorunitario',
			'desconto' => 'Desconto',
			'quantidade' => 'Quantidade',
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

		$criteria->compare('cod_produto',$this->cod_produto);
		$criteria->compare('cod_pedido',$this->cod_pedido);
		$criteria->compare('data_retirada',$this->data_retirada,true);
		$criteria->compare('valorunitario',$this->valorunitario);
		$criteria->compare('desconto',$this->desconto);
		$criteria->compare('quantidade',$this->quantidade);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}