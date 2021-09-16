<section class="profile margin-center">
    <h1>Designer & Développeur Web Junior</h1>
    <p>Lorem ipsum dolor sit amet, consectetur.Lorem ipsum dolor sit amet.</p>
    <figure class="svg-avatar">
      <img src="img/data/mf-avatar.svg" alt="">
    </figure>
    <figure class="svg-bottom">
      <img src="img/data/hero.svg" alt="">
    </figure>
</section>
<section class="skills">
  <div>
    <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
    <p>Lorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consecteturLorem ipsum dolor sit amet, consectetur</p>
  </div>
</section>
<section class="skills-column">
  <div class="developer">
    <figure>
      <img src="img/data/frontend.svg" alt="">
    </figure>
    <h1>Développement</h1>
    <p>Lorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolor</p>
    <p>Things I enjoy designing:</p>
    <p>Lorem ipsum dolorLorem ipsum dolor</p>
    <p>Design Tools:</p>
    <ul>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
    </ul>
  </div>
  <div class="Design">
    <figure>
      <img src="img/data/frontend.svg" alt="">
    </figure>
    <h1>Design</h1>
    <p>Lorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolor</p>
    <p>Things I enjoy designing:</p>
    <p>Lorem ipsum dolorLorem ipsum dolor</p>
    <p>Design Tools:</p>
    <ul>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
      <li>Lorem ipsum dolor</li>
    </ul>
  </div>
</section>
<section class="projects">
  <h1>Mes récents projets</h1>
  <div class="box-project">
    <?php foreach ($projects as $project) { ?>
      <article class="">
        <figure>
          <?= $this->Html->image('data/pictures/projects/' . $project->poster, ['alt' => $project->title]) ?>
        </figure>
        <div class="overlay">
          <div class="text">
            <?= $this->Html->link($project->title, ['action' => 'view', $project->slug]) ?>
            <?= $this->Form->postButton('Détails', ['controller' => 'Projects', 'action' => 'view', $project->slug]) ?>
          </div>
        </article>
      <?php } ?>
    </div>

  </section>
