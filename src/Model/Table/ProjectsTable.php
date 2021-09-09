<?php

namespace App\Model\Table;

use Cake\Event\EventInterface;
use Cake\ORM\Table;
use Cake\utility\Text;
use Cake\Validation\Validator;

class ProjectsTable extends Table {
  public function initialize(array $config): void {
    $this->addBehavior('Timestamp');
  }

  public function beforeSave(EventInterface $event, $entity, $options)
  {
    if ($entity->isNew() && !$entity->slug)
    {
      $sluggedTittle = Text::slug($entity->title);
      $entity->slug = substr($sluggedTittle, 0, 199);
    }
  }
  public function validationDefault(Validator $validator): Validator
      {
          $validator
              ->notEmptyString('title', 'Le champs ne peut être vide')
              ->minLength('title', 10)
              ->maxLength('title', 255)

              ->notEmptyString('body')
              ->minLength('body', 10);

          return $validator;
      }
}
