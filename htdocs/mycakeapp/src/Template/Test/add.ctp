<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Test'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="test form large-9 medium-8 columns content">
    <?= $this->Form->create($test) ?>
    <fieldset>
        <legend><?= __('Add Test') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('sex');
            echo $this->Form->control('birthday');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
