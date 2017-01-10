<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $title
 * @property string $rating
 * @property string $learner_acc
 * @property \Cake\I18n\Time $batch_start_date
 * @property string $description
 * @property string $url_img
 * @property string $price
 * @property string $category_name
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Course extends Entity
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
        'id' => false
    ];
}
