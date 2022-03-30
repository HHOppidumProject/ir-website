<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cognomina[]|\Cake\Collection\CollectionInterface $cognomina
 */
?>
<div class="cognomina index content">
    <?= $this->Html->link(__('New Cognomina'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cognomina') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('COGNOMENID') ?></th>
                    <th><?= $this->Paginator->sort('MALE') ?></th>
                    <th><?= $this->Paginator->sort('FEMALE') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cognomina as $cognomina): ?>
                <tr>
                    <td><?= $this->Number->format($cognomina->COGNOMENID) ?></td>
                    <td><?= h($cognomina->MALE) ?></td>
                    <td><?= h($cognomina->FEMALE) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cognomina->COGNOMENID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cognomina->COGNOMENID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cognomina->COGNOMENID], ['confirm' => __('Are you sure you want to delete # {0}?', $cognomina->COGNOMENID)]) ?>
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
