<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Praenomina $praenomina
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Praenomina'), ['action' => 'edit', $praenomina->PRAENOMENID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Praenomina'), ['action' => 'delete', $praenomina->PRAENOMENID], ['confirm' => __('Are you sure you want to delete # {0}?', $praenomina->PRAENOMENID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Praenomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Praenomina'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="praenomina view content">
            <h3><?= h($praenomina->PRAENOMENID) ?></h3>
            <table>
                <tr>
                    <th><?= __('MALE') ?></th>
                    <td><?= h($praenomina->MALE) ?></td>
                </tr>
                <tr>
                    <th><?= __('FEMALE') ?></th>
                    <td><?= h($praenomina->FEMALE) ?></td>
                </tr>
                <tr>
                    <th><?= __('SHORTENED') ?></th>
                    <td><?= h($praenomina->SHORTENED) ?></td>
                </tr>
                <tr>
                    <th><?= __('PRAENOMENID') ?></th>
                    <td><?= $this->Number->format($praenomina->PRAENOMENID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
