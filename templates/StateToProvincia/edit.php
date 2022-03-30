<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateToProvincium $stateToProvincium
 * @var string[]|\Cake\Collection\CollectionInterface $countries
 * @var string[]|\Cake\Collection\CollectionInterface $provincia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stateToProvincium->STATEID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stateToProvincium->STATEID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List State To Provincia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateToProvincia form content">
            <?= $this->Form->create($stateToProvincium) ?>
            <fieldset>
                <legend><?= __('Edit State To Provincium') ?></legend>
                <?php
                    echo $this->Form->control('COUNTRY', ['options' => $countries]);
                    echo $this->Form->control('STATENAME');
                    echo $this->Form->control('PROVINCIA', ['options' => $provincia, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
