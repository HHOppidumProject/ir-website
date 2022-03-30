<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->COUNTRYID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->COUNTRYID], ['confirm' => __('Are you sure you want to delete # {0}?', $country->COUNTRYID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->COUNTRYID) ?></h3>
            <table>
                <tr>
                    <th><?= __('COUNTRYNAME') ?></th>
                    <td><?= h($country->COUNTRYNAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('COUNTRYID') ?></th>
                    <td><?= $this->Number->format($country->COUNTRYID) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related State To Provincia') ?></h4>
                <?php if (!empty($country->state_to_provincia)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('STATEID') ?></th>
                            <th><?= __('COUNTRY') ?></th>
                            <th><?= __('STATENAME') ?></th>
                            <th><?= __('PROVINCIA') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->state_to_provincia as $stateToProvincia) : ?>
                        <tr>
                            <td><?= h($stateToProvincia->STATEID) ?></td>
                            <td><?= h($stateToProvincia->COUNTRY) ?></td>
                            <td><?= h($stateToProvincia->STATENAME) ?></td>
                            <td><?= h($stateToProvincia->PROVINCIA) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'StateToProvincia', 'action' => 'view', $stateToProvincia->STATEID]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'StateToProvincia', 'action' => 'edit', $stateToProvincia->STATEID]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StateToProvincia', 'action' => 'delete', $stateToProvincia->STATEID], ['confirm' => __('Are you sure you want to delete # {0}?', $stateToProvincia->STATEID)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
