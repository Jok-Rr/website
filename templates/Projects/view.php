
<h1><?= h($project->title) ?></h1>
<figure>
    <?= $this->Html->image('data/pictures/projects/'.$project->poster, ['alt' => $project->title]) ?>
  </figure>
<p><?= h($project->body) ?></p>
<p><small>Crée le <?= h($project->created->format(DATE_RFC850)) ?></small></p>
