<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $cod_cli
 * @property string $nome
 * @property string $endereco
 * @property string $telefone
 * @property string $email
 * @property string $data_nasci
 * @property string $UF
 * @property string $cidade
 *
 * The followings are the available model relations:
 * @property Pedido[] $pedidos
 */
class Cliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
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
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, UF, cidade', 'required'),
			array('nome, endereco, email, cidade', 'length', 'max'=>255),
			array('telefone', 'length', 'max'=>50),
			array('UF', 'length', 'max'=>2),
			array('data_nasci', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_cli, nome, endereco, telefone, email, data_nasci, UF, cidade', 'safe', 'on'=>'search'),
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
			'pedidos' => array(self::HAS_MANY, 'Pedido', 'cod_cli'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_cli' => 'Cod Cli',
			'nome' => 'Nome',
			'endereco' => 'Endereco',
			'telefone' => 'Telefone',
			'email' => 'Email',
			'data_nasci' => 'Data Nasci',
			'UF' => 'Uf',
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

		$criteria->compare('cod_cli',$this->cod_cli);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('data_nasci',$this->data_nasci,true);
		$criteria->compare('UF',$this->UF,true);
		$criteria->compare('cidade',$this->cidade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}