<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provincium Entity
 *
 * @property int $PROVINCIAID
 * @property string $PROVINCENAME
 *
 * @property \App\Model\Entity\StateToProvincium[] $state_to_provincia
 */
class Provincium extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<bool>
     */
    protected $_accessible = [
        'PROVINCENAME' => true,
        'state_to_provincia' => true,
    ];

    public const FIELD_STATE_TO_PROVINCIA = 'state_to_provincia';
}
