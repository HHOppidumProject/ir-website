<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CivilService $civilService
 * @var string[]|\Cake\Collection\CollectionInterface $cives
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $civilService->SERVICEID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $civilService->SERVICEID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Civil Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="civilServices form content">
            <?= $this->Form->create($civilService) ?>
            <fieldset>
                <legend><?= __('Edit Civil Service') ?></legend>
                <?php
                    echo $this->Form->control('SERVICENAME');
                    echo $this->Form->control('cives._ids', ['options' => $cives]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
