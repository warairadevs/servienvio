<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Budget Entity
 *
 * @property int $id_budget
 * @property string $username
 * @property string $source_latitude
 * @property string $destination_latitude
 * @property float $cost
 * @property \Cake\I18n\Time $delivery_time_estimated
 * @property string $source_longitude
 * @property string $destination_longitude
 *
 * @property \App\Model\Entity\User $user
 */
class Budget extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_budget' => false
    ];
}
