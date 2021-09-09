<h1>Ajouter un projet</h1>

<?php
  echo $this->Form->create($project);
  echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => '1']);
  echo $this->Form->control('title');
  echo $this->Form->control('body');
  echo $this->Form->button('Ajouter le projet');
  echo $this->Form->end();




 ?>
