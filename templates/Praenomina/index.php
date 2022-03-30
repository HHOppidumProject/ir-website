<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Praenomina[]|\Cake\Collection\CollectionInterface $praenomina
 */
?>
<div class="praenomina index content">
    <?= $this->Html->link(__('New Praenomina'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Praenomina') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('PRAENOMENID') ?></th>
                    <th><?= $this->Paginator->sort('MALE') ?></th>
                    <th><?= $this->Paginator->sort('FEMALE') ?></th>
                    <th><?= $this->Paginator->sort('SHORTENED') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($praenomina as $praenomina): ?>
                <tr>
                    <td><?= $this->Number->format($praenomina->PRAENOMENID) ?></td>
                    <td><?= h($praenomina->MALE) ?></td>
                    <td><?= h($praenomina->FEMALE) ?></td>
                    <td><?= h($praenomina->SHORTENED) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $praenomina->PRAENOMENID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $praenomina->PRAENOMENID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $praenomina->PRAENOMENID], ['confirm' => __('Are you sure you want to delete # {0}?', $praenomina->PRAENOMENID)]) ?>
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
