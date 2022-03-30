<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CivilService Entity
 *
 * @property int $SERVICEID
 * @property string $SERVICENAME
 *
 * @property \App\Model\Entity\Cives[] $cives
 */
class CivilService extends Entity
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
        'SERVICENAME' => true,
        'cives' => true,
    ];

    public const FIELD_CIVES = 'cives';
}
