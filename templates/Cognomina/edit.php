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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cognomina->COGNOMENID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cognomina->COGNOMENID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cognomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cognomina form content">
            <?= $this->Form->create($cognomina) ?>
            <fieldset>
                <legend><?= __('Edit Cognomina') ?></legend>
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
