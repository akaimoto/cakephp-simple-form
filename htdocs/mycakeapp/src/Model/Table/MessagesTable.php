<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesCkecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class MessagesTable extends Table{
	public function initialize(array $config){
	parent::initialize($config);
	$this->setDisplayField('message');
	$this->belongsTo('People');
}

public function validationDefault(Validator $validator){
	$validator
		->allowEmpty('id','create');
		
	$validator
		->integer('person_id','person id�͐����œ��͉������B')
		->notEmpty('person_id','person id�͕K���L�����������B');
		
	$validator
		->scalar('message','�e�L�X�g����͉������B')
		->requirePresence('message','create')
		->notEmpty('message','���b�Z�[�W�͕K���L�����ĉ������B');
		
	return $validator;
	}
}
		