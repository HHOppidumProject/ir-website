<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CivilService $civilService
 * @var \Cake\Collection\CollectionInterface|string[] $cives
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Civil Services'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="civilServices form content">
            <?= $this->Form->create($civilService) ?>
            <fieldset>
                <legend><?= __('Add Civil Service') ?></legend>
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
