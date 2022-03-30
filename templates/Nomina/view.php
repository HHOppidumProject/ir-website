<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nomina $nomina
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Nomina'), ['action' => 'edit', $nomina->NOMENID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Nomina'), ['action' => 'delete', $nomina->NOMENID], ['confirm' => __('Are you sure you want to delete # {0}?', $nomina->NOMENID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Nomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Nomina'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="nomina view content">
            <h3><?= h($nomina->NOMENID) ?></h3>
            <table>
                <tr>
                    <th><?= __('NOMEN') ?></th>
                    <td><?= h($nomina->NOMEN) ?></td>
                </tr>
                <tr>
                    <th><?= __('GENS') ?></th>
                    <td><?= h($nomina->GENS) ?></td>
                </tr>
                <tr>
                    <th><?= __('NOMENID') ?></th>
                    <td><?= $this->Number->format($nomina->NOMENID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
