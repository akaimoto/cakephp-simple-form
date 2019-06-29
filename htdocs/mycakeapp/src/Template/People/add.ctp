<p><?=$msg ?></p>
<?=$this->Form->create($entity,
['type'=>'post',
	'url'=>['controller'=>'People',
		'action'=>'add']]) ?>
<fieldset class="form">
Name: <?=$this->Form->error('People.name') ?>
<?=$this->Form->text('People.name') ?>
 
MAIL:<?=$this->Form->error('People.mail') ?>
<div><?=$this->Form->text('People.mail')?></div>
AGE:<?=$this->Form->error('People.age') ?>
<div><?=$this->Form->text('People.age')?></div>
<div><?=$this->Form->submit('送信')?></div>
<?=$this->Form->end()?>