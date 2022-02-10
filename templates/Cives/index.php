<?php 
$this->assign('title', 'Album Civium'); 
echo $this->Paginator->meta();
?>


<section id="highlights" class="wrapper style3">
    <h1 class="title"><?= 'Cives' ?></h1>

    <p><?= h($this->Paginator->counter(
    'Page {{page}} of {{pages}}, showing {{current}} records out of
     {{count}} total, starting on record {{start}}, ending on {{end}}')); ?></p>

    <div class="table-container">
        <table class="table is-bordered is-striped is-fullwidth is-hoverable">
            <tr>
                <th>ID</th>
                <th>Nomen</th>
                <th>Gens</th>
                <th>Date Joined</th>
            </tr>

            <?php foreach ($cives as $civis) : ?>
                <tr>
                    <td><?= $this->Html->link(substr(h($civis->CIVISID), 0, 27) . '...', ['action' => 'view', $civis->CIVISID]) ?></td>
                    <td><?= (!empty($civis->praenomina->SHORTENED) ? h($civis->praenomina->SHORTENED) : ($civis->PREFFEREDWORDGENDER == 0 ? h($civis->praenomina->MALE) : h($civis->praenomina->FEMALE)))  . " " . ($civis->PREFFEREDWORDGENDER == 0 ? h($civis->nomina->NOMEN) : h($civis->nomina->GENS)) . " " . ($civis->PREFFEREDWORDGENDER == 0 ? h($civis->cognomina->MALE) : h($civis->cognomina->FEMALE)) ?></td>
                    <td><?= h($civis->nomina->GENS) ?></td>
                    <td><?= $civis->DATEJOINED->format("Y-m-d") ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p class="has-text-centered"><?= $this->Paginator->numbers() ?></p>
    </div>
</section>