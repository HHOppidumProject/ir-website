<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CivilServiceRecord Entity
 *
 * @property int $RECORDENTRY
 * @property string $CIVIS
 * @property int $SERVICE
 * @property \Cake\I18n\FrozenDate $DATESTART
 * @property \Cake\I18n\FrozenDate $DATEEND
 *
 * @property \App\Model\Entity\Cives $cives
 * @property \App\Model\Entity\CivilService $civil_service
 */
class CivilServiceRecord extends Entity
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
        'CIVIS' => true,
        'SERVICE' => true,
        'DATESTART' => true,
        'DATEEND' => true,
        'cives' => true,
        'civil_service' => true,
    ];

    public const FIELD_CIVES = 'cives';
    public const FIELD_CIVIL_SERVICE = 'civil_service';
}
