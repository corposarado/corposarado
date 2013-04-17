<?php

/**
 * This is the model class for table "despesa".
 *
 * The followings are the available columns in table 'despesa':
 * @property integer $id_despesa
 * @property string $descricao
 * @property integer $valor
 * @property string $data_vencimento
 * @property integer $id_funcionario
 *
 * The followings are the available model relations:
 * @property Funcionario $idFuncionario
 */
class Despesa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Despesa the static model class
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
		return 'despesa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, valor, data_vencimento, id_funcionario', 'required'),
			array('valor, id_funcionario', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_despesa, descricao, valor, data_vencimento, id_funcionario', 'safe', 'on'=>'search'),
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
			'idFuncionario' => array(self::BELONGS_TO, 'Funcionario', 'id_funcionario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_despesa' => 'Id Despesa',
			'descricao' => 'Descricao',
			'valor' => 'Valor',
			'data_vencimento' => 'Data Vencimento',
			'id_funcionario' => 'Id Funcionario',
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

		$criteria->compare('id_despesa',$this->id_despesa);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('data_vencimento',$this->data_vencimento,true);
		$criteria->compare('id_funcionario',$this->id_funcionario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}