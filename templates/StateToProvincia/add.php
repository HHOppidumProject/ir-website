<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StateToProvincium $stateToProvincium
 * @var \Cake\Collection\CollectionInterface|string[] $countries
 * @var \Cake\Collection\CollectionInterface|string[] $provincia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List State To Provincia'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="stateToProvincia form content">
            <?= $this->Form->create($stateToProvincium) ?>
            <fieldset>
                <legend><?= __('Add State To Provincium') ?></legend>
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
