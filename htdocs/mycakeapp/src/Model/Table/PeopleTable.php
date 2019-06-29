<?php 
namespace App\Model\Table;

 use Cake\ORM\Query;
 use Cake\ORM\RulesChecker;
 use Cake\ORM\Table;
 use Cake\Validation\Validator;
 
 class PeopleTable extends Table{
 
 public function initialize(array $config){
  parent::initialize($config);
    $this->setDisplayField('name');
    $this->hasMany('Messages');
    }
    
	public function findMe(Query $query, array $options){
	$me = $options['me'];
	return $query->where(['name like' => '%' . $me . '%'])
	->orWhere(['mail like' => '%' . $me . '%'])
	->order(['age'=>'asc']);
 }

 public function findByAge(Query $query, array $options){
	return $query->order(['age'=>'asc'])->order(['name'=>'asc']);
	}
 public function validationDefault(Validator $validator){
 $validator
  ->integer('id','id�͐����œ��͂��ĉ������B')
  ->allowEmpty('id','create');

 $validator
  ->scalar('name','�e�L�X�g����͉������B')
  ->requirePresence('name','create')
  ->notEmpty('name','���O�͕K���L�����ĉ������B');

 $validator
  ->scalar('mail')
  ->allowEmpty('mail')
  ->email('mail',false,'���[���A�h���X���L�����ĉ������B');
  
 $validator
  ->integer('age','��������͉������B')
  ->requirePresence('age','create')
  ->notEmpty('age','�K���l����͉������B')
  ->greaterThan('age',-1,'�[���ȏ�̒l���L���������B');
  
  return $validator;	
  }
  
}