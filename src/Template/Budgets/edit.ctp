<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $budget->id_budget],
                ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id_budget)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Budgets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="budgets form large-9 medium-8 columns content">
    <?= $this->Form->create($budget) ?>
    <fieldset>
        <legend><?= __('Edit Budget') ?></legend>
        <?php
            echo $this->Form->input('username', ['options' => $users]);
            echo $this->Form->input('source_latitude');
            echo $this->Form->input('destination_latitude');
            echo $this->Form->input('cost');
            echo $this->Form->input('delivery_time_estimated');
            echo $this->Form->input('source_longitude');
            echo $this->Form->input('destination_longitude');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
