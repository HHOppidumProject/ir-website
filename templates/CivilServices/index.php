<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CivilService[]|\Cake\Collection\CollectionInterface $civilServices
 */
?>
<div class="civilServices index content">
    <?= $this->Html->link(__('New Civil Service'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Civil Services') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('SERVICEID') ?></th>
                    <th><?= $this->Paginator->sort('SERVICENAME') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($civilServices as $civilService): ?>
                <tr>
                    <td><?= $this->Number->format($civilService->SERVICEID) ?></td>
                    <td><?= h($civilService->SERVICENAME) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $civilService->SERVICEID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $civilService->SERVICEID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $civilService->SERVICEID], ['confirm' => __('Are you sure you want to delete # {0}?', $civilService->SERVICEID)]) ?>
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
