
<h1><?= h($project->title) ?></h1>
<p><?= h($project->body) ?></p>
<p><small>Crée le <?= h($project->created->format(DATE_RFC850)) ?></small></p>
<p><?= $this->Html->link('Editer le projet', ['action' => 'edit', $project->slug]); ?></p>
<p><?= $this->Form->postLink('Supprimer le projet', ['action' => 'delete', $project->slug], ['confirm' => 'Are you sure ?']); ?></p>
