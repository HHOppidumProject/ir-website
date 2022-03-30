<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Praenomina $praenomina
 * @var \Cake\Collection\CollectionInterface|string[] $cives
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Praenomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="praenomina form content">
            <?= $this->Form->create($praenomina) ?>
            <fieldset>
                <legend><?= __('Add Praenomina') ?></legend>
                <?php
                    echo $this->Form->control('MALE');
                    echo $this->Form->control('FEMALE');
                    echo $this->Form->control('SHORTENED');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
