<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Budget'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="budgets index large-9 medium-8 columns content">
    <h3><?= __('Budgets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_budget') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destination_latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_time_estimated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('destination_longitude') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($budgets as $budget): ?>
            <tr>
                <td><?= $this->Number->format($budget->id_budget) ?></td>
                <td><?= $budget->has('user') ? $this->Html->link($budget->user->username, ['controller' => 'Users', 'action' => 'view', $budget->user->username]) : '' ?></td>
                <td><?= h($budget->source_latitude) ?></td>
                <td><?= h($budget->destination_latitude) ?></td>
                <td><?= $this->Number->format($budget->cost) ?></td>
                <td><?= h($budget->delivery_time_estimated) ?></td>
                <td><?= h($budget->source_longitude) ?></td>
                <td><?= h($budget->destination_longitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $budget->id_budget]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $budget->id_budget]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $budget->id_budget], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->id_budget)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
