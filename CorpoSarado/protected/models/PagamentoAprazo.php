<?php

/**
 * This is the model class for table "pagamento_aprazo".
 *
 * The followings are the available columns in table 'pagamento_aprazo':
 * @property integer $cod_pag
 * @property integer $parcelas
 *
 * The followings are the available model relations:
 * @property Pagamento $codPag
 */
class PagamentoAprazo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PagamentoAprazo the static model class
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
		return 'pagamento_aprazo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_pag, parcelas', 'required'),
			array('cod_pag, parcelas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_pag, parcelas', 'safe', 'on'=>'search'),
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
			'parcelas' => 'Parcelas',
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
		$criteria->compare('parcelas',$this->parcelas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}