<?php
declare(strict_types=1);

namespace App\Model\CivesPriv;

use Cake\ORM\Entity;

class CivesPriv extends Entity
{
    protected $_accessible = [
        '*' => true,
        'CIVESID' => false,
    ];
}
