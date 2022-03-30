<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CivilServiceRecord $civilServiceRecord
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Civil Service Record'), ['action' => 'edit', $civilServiceRecord->RECORDENTRY], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Civil Service Record'), ['action' => 'delete', $civilServiceRecord->RECORDENTRY], ['confirm' => __('Are you sure you want to delete # {0}?', $civilServiceRecord->RECORDENTRY), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Civil Service Record'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Civil Service Record'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="civilServiceRecord view content">
            <h3><?= h($civilServiceRecord->RECORDENTRY) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cives') ?></th>
                    <td><?= $civilServiceRecord->has('cives') ? $this->Html->link($civilServiceRecord->cives->CIVISID, ['controller' => 'Cives', 'action' => 'view', $civilServiceRecord->cives->CIVISID]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Civil Service') ?></th>
                    <td><?= $civilServiceRecord->has('civil_service') ? $this->Html->link($civilServiceRecord->civil_service->SERVICEID, ['controller' => 'CivilServices', 'action' => 'view', $civilServiceRecord->civil_service->SERVICEID]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('RECORDENTRY') ?></th>
                    <td><?= $this->Number->format($civilServiceRecord->RECORDENTRY) ?></td>
                </tr>
                <tr>
                    <th><?= __('DATESTART') ?></th>
                    <td><?= h($civilServiceRecord->DATESTART) ?></td>
                </tr>
                <tr>
                    <th><?= __('DATEEND') ?></th>
                    <td><?= h($civilServiceRecord->DATEEND) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
