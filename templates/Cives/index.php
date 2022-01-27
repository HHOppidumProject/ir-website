<?php $this->assign('title', 'Album Civium'); ?>


<section id="highlights" class="wrapper style3">
    <h1 class="title"><?= 'Cives' ?></h1>


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
                    <td><?= $this->html->link(substr(h($civis->CIVISID), 0, 27) . '...', ['action' => 'view', $civis->CIVISID]) ?></td>
                    <td><?= h($civis->SHORTENED) . " " . h($civis->NOMEN) . " " . h($civis->COGNOMEN) ?></td>
                    <td><?= h($civis->GENS) ?></td>
                    <td><?= $civis->DATEJOINED->format("Y-m-d") ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</section>