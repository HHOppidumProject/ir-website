<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nomina[]|\Cake\Collection\CollectionInterface $nomina
 */
?>
<div class="nomina index content">
    <?= $this->Html->link(__('New Nomina'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Nomina') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('NOMENID') ?></th>
                    <th><?= $this->Paginator->sort('NOMEN') ?></th>
                    <th><?= $this->Paginator->sort('GENS') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nomina as $nomina): ?>
                <tr>
                    <td><?= $this->Number->format($nomina->NOMENID) ?></td>
                    <td><?= h($nomina->NOMEN) ?></td>
                    <td><?= h($nomina->GENS) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $nomina->NOMENID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nomina->NOMENID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nomina->NOMENID], ['confirm' => __('Are you sure you want to delete # {0}?', $nomina->NOMENID)]) ?>
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
