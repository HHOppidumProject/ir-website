<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nomina Entity
 *
 * @property int $NOMENID
 * @property string $NOMEN
 * @property string $GENS
 *
 * @property \App\Model\Entity\Cives $cives
 */
class Nomina extends Entity
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
        'NOMEN' => true,
        'GENS' => true,
        'cives' => true,
    ];

    public const FIELD_CIVES = 'cives';
}
