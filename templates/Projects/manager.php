<button onclick="history.go(-1);">Back </button>
<p><?= $this->Html->link('Ajouter un projet', ['action' => 'add']);  ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>Nom du projet</th>
        <th>Publié</th>
        <th>Créer le</th>
        <th>Modifier le</th>
        <th>Action</th>
    </tr>
    <?php foreach ($projects as $project) { ?>
        <tr>
            <td><?= $project->id ?></td>
            <td><?= $project->title ?></td>
            <td>
                <?=($project->published != null) ? 'Oui' : 'Non' ?>
            </td>
            <td><?= $project->created ?></td>
            <td><?= $project->modified ?></td>
            <td>
                <?= $this->Html->link('Editer', ['controller' => 'Projects', 'action' => 'edit', $project->slug]);  ?>
                <?= $this->Form->postLink('Supprimer', ['action' => 'delete', $project->slug], ['confirm' => 'Are you sure ?']); ?>
            </td>
        </tr>
    <?php } ?>

</table>