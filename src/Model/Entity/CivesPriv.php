<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * @property string $CIVIS
 * @property string $FORENAME
 * @property string $SURNAME
 * @property string|null $ADDRESS
 * @property string $CITY
 * @property int $STATE_PROVINCE
 * @property string $PHONE_NUMBER
 * @property string $POSTCODE_ZIP
 * @property string $OCCUPATION
 * @property \Cake\I18n\FrozenDate $LAST_PAID_TAX
 * @property \App\Model\Entity\StateToProvincium $state_to_provincium
 */
class CivesPriv extends Entity
{
    protected $_accessible = [
        '*' => true,
        'CIVESID' => false,
    ];

    public const FIELD_STATE_TO_PROVINCIUM
    = 'state_to_provincium';
}
