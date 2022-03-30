<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cognomina $cognomina
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cognomina'), ['action' => 'edit', $cognomina->COGNOMENID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cognomina'), ['action' => 'delete', $cognomina->COGNOMENID], ['confirm' => __('Are you sure you want to delete # {0}?', $cognomina->COGNOMENID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cognomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cognomina'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cognomina view content">
            <h3><?= h($cognomina->COGNOMENID) ?></h3>
            <table>
                <tr>
                    <th><?= __('MALE') ?></th>
                    <td><?= h($cognomina->MALE) ?></td>
                </tr>
                <tr>
                    <th><?= __('FEMALE') ?></th>
                    <td><?= h($cognomina->FEMALE) ?></td>
                </tr>
                <tr>
                    <th><?= __('COGNOMENID') ?></th>
                    <td><?= $this->Number->format($cognomina->COGNOMENID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
