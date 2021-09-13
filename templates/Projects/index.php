<h1>Mes Projets</h1>

<?php foreach ($projects as $project) { ?>
  <article class="">
    <div class="box-project">
      <figure>
        <?= $this->Html->image('data/pictures/' . $project->poster, ['alt' => $project->title]) ?>
      </figure>
      <div class="over-frame">
        <a data-id="6" href="" class="">
          <span>+</span>
        </a>
      </div>
      <div class="text-box">
        <strong><?= $this->Html->link($project->title, ['action' => 'view', $project->slug]); ?></strong>
        <p class="text-left text-uppercase">
          DÉVELOPPEMENT WEB </p>
      </div>
    </div>
  </article>
<?php } ?>
