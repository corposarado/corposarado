<?php

/**
 * This is the model class for table "fornecedor".
 *
 * The followings are the available columns in table 'fornecedor':
 * @property integer $cod_forn
 * @property string $nome
 * @property string $endereco
 * @property string $telefone
 * @property string $email
 *
 * The followings are the available model relations:
 * @property TipoProduto[] $tipoProdutos
 */
class Fornecedor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fornecedor the static model class
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
		return 'fornecedor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, endereco, telefone, email', 'required'),
			array('nome, endereco, email', 'length', 'max'=>255),
			array('telefone', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_forn, nome, endereco, telefone, email', 'safe', 'on'=>'search'),
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
			'tipoProdutos' => array(self::MANY_MANY, 'TipoProduto', 'fornece_produto(cod_fornecedor, cod_produto)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_forn' => 'Cod Forn',
			'nome' => 'Nome',
			'endereco' => 'Endereco',
			'telefone' => 'Telefone',
			'email' => 'Email',
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

		$criteria->compare('cod_forn',$this->cod_forn);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}