<h1>Mes Projets</h1>
<?= $this->Html->link('Ajouter un article', ['action' => 'add']);  ?>
<?php foreach ($projects as $project) { ?>
  <article class="">
    <strong><?= $this->Html->link($project->title, ['action' => 'view', $project->slug]); ?></strong>
    <p><?= $project->body?></p>
    <p><?= $project->created->format(DATE_RFC850)?></p>
    <?= $this->Html->link('Editer un projet', ['action' => 'edit', $project->slug]);  ?>
  </article>
<?php } ?>
