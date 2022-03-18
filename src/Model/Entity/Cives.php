<?php
declare(strict_types=1);

namespace App\Model\Cives;

use Cake\ORM\Entity;

class Cives extends Entity
{
    protected $_accessible = [
        '*' => true,
        'CIVESID' => false,
    ];
}
