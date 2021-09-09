<h1>Editer un projet</h1>
  <?php
  echo $this->Form->create($project, ['enctype' => 'multipart/form-data']);
  echo $this->Form->control('title' , ['label' => 'Titre']);
  echo $this->Form->control('body', ['label' => 'Informations sur le projet']);?>
  <p>Publier le projet :</p>
  <?php echo $this->Form->radio(
    'published',
    [
        ['value' => '1', 'text' => 'Oui'],
        ['value' => '0', 'text' => 'Non'],
    ]
  );
  echo $this->Form->control('poster', ['type' => 'file', 'label' => 'Image']);
  echo $this->Form->button('Modifier le projet au site');
  echo $this->Form->end();




 ?>


