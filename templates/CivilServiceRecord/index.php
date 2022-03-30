<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CivilServiceRecord[]|\Cake\Collection\CollectionInterface $civilServiceRecord
 */
?>
<div class="civilServiceRecord index content">
    <?= $this->Html->link(__('New Civil Service Record'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Civil Service Record') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('RECORDENTRY') ?></th>
                    <th><?= $this->Paginator->sort('CIVIS') ?></th>
                    <th><?= $this->Paginator->sort('SERVICE') ?></th>
                    <th><?= $this->Paginator->sort('DATESTART') ?></th>
                    <th><?= $this->Paginator->sort('DATEEND') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($civilServiceRecord as $civilServiceRecord): ?>
                <tr>
                    <td><?= $this->Number->format($civilServiceRecord->RECORDENTRY) ?></td>
                    <td><?= $civilServiceRecord->has('cives') ? $this->Html->link($civilServiceRecord->cives->CIVISID, ['controller' => 'Cives', 'action' => 'view', $civilServiceRecord->cives->CIVISID]) : '' ?></td>
                    <td><?= $civilServiceRecord->has('civil_service') ? $this->Html->link($civilServiceRecord->civil_service->SERVICEID, ['controller' => 'CivilServices', 'action' => 'view', $civilServiceRecord->civil_service->SERVICEID]) : '' ?></td>
                    <td><?= h($civilServiceRecord->DATESTART) ?></td>
                    <td><?= h($civilServiceRecord->DATEEND) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $civilServiceRecord->RECORDENTRY]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $civilServiceRecord->RECORDENTRY]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $civilServiceRecord->RECORDENTRY], ['confirm' => __('Are you sure you want to delete # {0}?', $civilServiceRecord->RECORDENTRY)]) ?>
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
