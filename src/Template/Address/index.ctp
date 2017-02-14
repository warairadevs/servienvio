<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?></li>
        <!-- <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li> -->
        <!-- <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li> -->
    </ul>
</nav>
<div class="address index large-10 medium-8 columns content">
    <h3><?= __('Address') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($address as $addres): ?>
            <tr>
                <td><?= $this->Number->format($addres->id_address) ?></td>
                <td><?= $addres->has('user') ? $this->Html->link($addres->user->username, ['controller' => 'Users', 'action' => 'view', $addres->user->username]) : '' ?></td>
                <td><?= h($addres->latitude) ?></td>
                <td><?= h($addres->address_description) ?></td>
                <td><?= h($addres->longitude) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addres->id_address]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addres->id_address]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addres->id_address], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->id_address)]) ?>
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
