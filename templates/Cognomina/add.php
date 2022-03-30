<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cognomina $cognomina
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Cognomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cognomina form content">
            <?= $this->Form->create($cognomina) ?>
            <fieldset>
                <legend><?= __('Add Cognomina') ?></legend>
                <?php
                    echo $this->Form->control('MALE');
                    echo $this->Form->control('FEMALE');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
