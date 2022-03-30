<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateToProvincium[]|\Cake\Collection\CollectionInterface $stateToProvincia
 */
?>
<div class="stateToProvincia index content">
    <?= $this->Html->link(__('New State To Provincium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('State To Provincia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('STATEID') ?></th>
                    <th><?= $this->Paginator->sort('COUNTRY') ?></th>
                    <th><?= $this->Paginator->sort('STATENAME') ?></th>
                    <th><?= $this->Paginator->sort('PROVINCIA') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stateToProvincia as $stateToProvincium): ?>
                <tr>
                    <td><?= $this->Number->format($stateToProvincium->STATEID) ?></td>
                    <td><?= $stateToProvincium->has('country') ? $this->Html->link($stateToProvincium->country->COUNTRYID, ['controller' => 'Countries', 'action' => 'view', $stateToProvincium->country->COUNTRYID]) : '' ?></td>
                    <td><?= h($stateToProvincium->STATENAME) ?></td>
                    <td><?= $stateToProvincium->has('provincium') ? $this->Html->link($stateToProvincium->provincium->PROVINCIAID, ['controller' => 'Provincia', 'action' => 'view', $stateToProvincium->provincium->PROVINCIAID]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $stateToProvincium->STATEID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stateToProvincium->STATEID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stateToProvincium->STATEID], ['confirm' => __('Are you sure you want to delete # {0}?', $stateToProvincium->STATEID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
