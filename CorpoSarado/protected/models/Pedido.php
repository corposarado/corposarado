<?php

/**
 * This is the model class for table "pedido".
 *
 * The followings are the available columns in table 'pedido':
 * @property integer $cod_pedido
 * @property string $data_pedido
 * @property integer $cod_funcionario
 * @property integer $cod_cli
 *
 * The followings are the available model relations:
 * @property Produto[] $produtos
 * @property Pagamento[] $pagamentos
 * @property Funcionario $codFuncionario
 * @property Cliente $codCli
 */
class Pedido extends CActiveRecord
{

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedido the static model class
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
		return 'pedido';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data_pedido, cod_funcionario', 'required'),
			array('cod_funcionario, cod_cli', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_pedido, data_pedido, cod_funcionario, cod_cli', 'safe', 'on'=>'search'),
			array('data_pedido','default','value'=>new CDbExpression('NOW()'), 'setOnEmpty'=>false,'on'=>'insert')
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
			'produtos' => array(self::MANY_MANY, 'Produto', 'item(cod_pedido, cod_produto)'),
			'pagamentos' => array(self::HAS_MANY, 'Pagamento', 'cod_pedido'),
			'codFuncionario' => array(self::BELONGS_TO, 'Funcionario', 'cod_funcionario'),
			'codCli' => array(self::BELONGS_TO, 'Cliente', 'cod_cli'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod_pedido' => 'Cod Pedido',
			'data_pedido' => 'Data Pedido',
			'cod_funcionario' => 'Código do Funcionário',
			'cod_cli' => 'Código do Cliente',
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

		$criteria->compare('cod_pedido',$this->cod_pedido);
		$criteria->compare('data_pedido',$this->data_pedido,true);
		$criteria->compare('cod_funcionario',$this->cod_funcionario);
		$criteria->compare('cod_cli',$this->cod_cli);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}