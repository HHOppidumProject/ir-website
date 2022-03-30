<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CivilServiceRecord $civilServiceRecord
 * @var string[]|\Cake\Collection\CollectionInterface $cives
 * @var string[]|\Cake\Collection\CollectionInterface $civilServices
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $civilServiceRecord->RECORDENTRY],
                ['confirm' => __('Are you sure you want to delete # {0}?', $civilServiceRecord->RECORDENTRY), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Civil Service Record'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="civilServiceRecord form content">
            <?= $this->Form->create($civilServiceRecord) ?>
            <fieldset>
                <legend><?= __('Edit Civil Service Record') ?></legend>
                <?php
                    echo $this->Form->control('CIVIS', ['options' => $cives]);
                    echo $this->Form->control('SERVICE', ['options' => $civilServices]);
                    echo $this->Form->control('DATESTART');
                    echo $this->Form->control('DATEEND');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
