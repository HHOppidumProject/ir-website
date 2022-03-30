<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateToProvincium $stateToProvincium
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit State To Provincium'), ['action' => 'edit', $stateToProvincium->STATEID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State To Provincium'), ['action' => 'delete', $stateToProvincium->STATEID], ['confirm' => __('Are you sure you want to delete # {0}?', $stateToProvincium->STATEID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List State To Provincia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State To Provincium'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateToProvincia view content">
            <h3><?= h($stateToProvincium->STATEID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $stateToProvincium->has('country') ? $this->Html->link($stateToProvincium->country->COUNTRYID, ['controller' => 'Countries', 'action' => 'view', $stateToProvincium->country->COUNTRYID]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('STATENAME') ?></th>
                    <td><?= h($stateToProvincium->STATENAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('Provincium') ?></th>
                    <td><?= $stateToProvincium->has('provincium') ? $this->Html->link($stateToProvincium->provincium->PROVINCIAID, ['controller' => 'Provincia', 'action' => 'view', $stateToProvincium->provincium->PROVINCIAID]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('STATEID') ?></th>
                    <td><?= $this->Number->format($stateToProvincium->STATEID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
