<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Provincium[]|\Cake\Collection\CollectionInterface $provincia
 */
?>
<div class="provincia index content">
    <?= $this->Html->link(__('New Provincium'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Provincia') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('PROVINCIAID') ?></th>
                    <th><?= $this->Paginator->sort('PROVINCENAME') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($provincia as $provincium): ?>
                <tr>
                    <td><?= $this->Number->format($provincium->PROVINCIAID) ?></td>
                    <td><?= h($provincium->PROVINCENAME) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $provincium->PROVINCIAID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $provincium->PROVINCIAID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $provincium->PROVINCIAID], ['confirm' => __('Are you sure you want to delete # {0}?', $provincium->PROVINCIAID)]) ?>
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
