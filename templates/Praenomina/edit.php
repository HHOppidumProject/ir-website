<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Praenomina $praenomina
 * @var string[]|\Cake\Collection\CollectionInterface $cives
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $praenomina->PRAENOMENID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $praenomina->PRAENOMENID), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Praenomina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="praenomina form content">
            <?= $this->Form->create($praenomina) ?>
            <fieldset>
                <legend><?= __('Edit Praenomina') ?></legend>
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
