<?php

/**
 * This is the model class for table "funcionario".
 *
 * The followings are the available columns in table 'funcionario':
 * @property integer $cod_func
 * @property string $nome
 * @property string $endereco
 * @property string $data_nasci
 * @property string $telefone
 * @property string $email
 * @property string $senha
 * @property integer $admin
 * @property string $uf
 * @property string $cidade
 *
 * The followings are the available model relations:
 * @property Despesa[] $despesas
 * @property Pedido[] $pedidos
 */
class Funcionario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Funcionario the static model class
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
		return 'funcionario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, telefone, email, senha, uf, cidade', 'required'),
			array('admin', 'numerical', 'integerOnly'=>true),
			array('nome, endereco, email, senha, cidade', 'length', 'max'=>255),
			array('telefone', 'length', 'max'=>50),
			array('uf', 'length', 'max'=>2),
			array('data_nasci', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_func, nome, endereco, data_nasci, telefone, email, senha, admin, uf, cidade', 'safe', 'on'=>'search'),
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
			'despesas' => array(self::HAS_MANY, 'Despesa', 'id_funcionario'),
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'cod_funcionario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_func' => 'Cod Func',
			'nome' => 'Nome',
			'endereco' => 'Endereco',
			'data_nasci' => 'Data Nasci',
			'telefone' => 'Telefone',
			'email' => 'Email',
			'senha' => 'Senha',
			'admin' => 'Admin',
			'uf' => 'Uf',
			'cidade' => 'Cidade',
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

		$criteria->compare('cod_func',$this->cod_func);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('data_nasci',$this->data_nasci,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('admin',$this->admin);
		$criteria->compare('uf',$this->uf,true);
		$criteria->compare('cidade',$this->cidade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}