<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StateToProvincium Entity
 *
 * @property int $STATEID
 * @property int $COUNTRY
 * @property string $STATENAME
 * @property int|null $PROVINCIA
 *
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Provincium|null $provincium
 */
class StateToProvincium extends Entity
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
        'COUNTRY' => true,
        'STATENAME' => true,
        'PROVINCIA' => true,
        'country' => true,
        'provincium' => true,
    ];

    public const FIELD_COUNTRY = 'country';
    public const FIELD_PROVINCIUM = 'provincium';
}
