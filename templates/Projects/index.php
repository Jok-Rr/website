<h1>Mes Projets</h1>

<?php foreach ($projects as $project) { ?>
  <article class="">
  <figure>
    <?= $this->Html->image('data/pictures/'.$project->poster, ['alt' => $project->title]) ?>
  </figure>
    <strong><?= $this->Html->link($project->title, ['action' => 'view', $project->slug]); ?></strong>
    <p><?= $project->body?></p>
    <p><?= $project->created->format(DATE_RFC850)?></p>
  </article>
<?php } ?>