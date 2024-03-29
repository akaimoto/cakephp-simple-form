<?php
 namespace App\Controller;
 
 use App\Controller\AppController;

 class PeopleController extends AppController{
 
  public function index(){
  if($this->request->isPost()){
  $find = $this->request->data['People']['find'];
  $data = $this->People->find('me',['me'=>$find])
  ->contain(['Messages']);
  }else{
		$data = $this->People->find('byage')
		->contain(['Messages']);
	}
	$this -> set('data',$data);
  } 
  
  public function add(){
  $msg = 'please type your personal data...';
  $entity = $this->People->newEntity();
  if ($this->request->is('post')){
  $data = $this->request->data['People'];
  $entity = $this->People->newEntity($data);
  if ($this->People->save($entity)){
		return $this->redirect(['action'=>'index']);
  }
	$msg = 'Error was ocured...';
}
	$this->set('msg',$msg);
	$this->set('entity',$entity);
} 
  public function edit(){
  $id = $this->request->query['id'];
  $entity = $this->People->get($id);
  $this->set('entity',$entity);
  }
  
  public function update(){
   if($this->request->is('post')){
    $data= $this->request->data['people'];
    $entity=$this->request->get($data['id']);
    $this->People->patchEntity($entity,$data);
    $this->People->save($entity);
    }
	return $this->redirect(['action'=>'index']);
  }
 }