<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Budget'), ['action' => 'edit', $budget->id_budget]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Budget'), ['action' => 'delete', $budget->id_budget], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id_budget)]) ?> </li>
        <li><?= $this->Html->link(__('List Budgets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Budget'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="budgets view large-9 medium-8 columns content">
    <h3><?= h($budget->id_budget) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $budget->has('user') ? $this->Html->link($budget->user->username, ['controller' => 'Users', 'action' => 'view', $budget->user->username]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Latitude') ?></th>
            <td><?= h($budget->source_latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination Latitude') ?></th>
            <td><?= h($budget->destination_latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Longitude') ?></th>
            <td><?= h($budget->source_longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination Longitude') ?></th>
            <td><?= h($budget->destination_longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Budget') ?></th>
            <td><?= $this->Number->format($budget->id_budget) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($budget->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Time Estimated') ?></th>
            <td><?= h($budget->delivery_time_estimated) ?></td>
        </tr>
    </table>
</div>
