<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nomina $nomina
 * @var \Cake\Collection\CollectionInterface|string[] $cives
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Nomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="nomina form content">
            <?= $this->Form->create($nomina) ?>
            <fieldset>
                <legend><?= __('Add Nomina') ?></legend>
                <?php
                    echo $this->Form->control('NOMEN');
                    echo $this->Form->control('GENS');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
