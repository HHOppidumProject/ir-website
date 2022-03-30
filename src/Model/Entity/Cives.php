<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cives Entity
 *
 * @property string $CIVISID
 * @property int $PRAENOMEN
 * @property int $NOMEN
 * @property int $COGNOMEN
 * @property int $ISPATRICIAN
 * @property string $PASSWORDHASH
 * @property int $PREFFEREDWORDGENDER
 * @property string $GENDER
 * @property string $EMAIL
 * @property \Cake\I18n\FrozenDate $DOB
 * @property \Cake\I18n\FrozenDate $DATEJOINED
 *
 * @property \App\Model\Entity\CivesPriv|null $cives_priv
 * @property \App\Model\Entity\Cognomina $cognomina
 * @property \App\Model\Entity\Nomina $nomina
 * @property \App\Model\Entity\Praenomina $praenomina
 * @property \App\Model\Entity\CivilService[] $civil_services
 */
class Cives extends Entity
{
    protected $_accessible = [
        '*' => true,
        'CIVESID' => false,
    ];

    public const FIELD_CIVES_PRIV = 'cives_priv';
    public const FIELD_COGNOMINA = 'cognomina';
    public const FIELD_NOMINA = 'nomina';
    public const FIELD_PRAENOMINA = 'praenomina';
    public const FIELD_CIVIL_SERVICES = 'civil_services';
}
