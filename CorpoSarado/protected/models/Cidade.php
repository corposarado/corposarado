<?php

/**
 * This is the model class for table "cidade".
 *
 * The followings are the available columns in table 'cidade':
 * @property integer $cod_cid
 * @property string $UF
 * @property string $Cidade
 *
 * The followings are the available model relations:
 * @property Cliente[] $clientes
 * @property Funcionario[] $funcionarios
 */
class Cidade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cidade the static model class
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
		return 'cidade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('UF, Cidade', 'required'),
			array('UF', 'length', 'max'=>2),
			array('Cidade', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_cid, UF, Cidade', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Cliente', 'cod_cidade'),
			'funcionarios' => array(self::HAS_MANY, 'Funcionario', 'cod_cid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_cid' => 'Cod Cid',
			'UF' => 'Uf',
			'Cidade' => 'Cidade',
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

		$criteria->compare('cod_cid',$this->cod_cid);
		$criteria->compare('UF',$this->UF,true);
		$criteria->compare('Cidade',$this->Cidade,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}