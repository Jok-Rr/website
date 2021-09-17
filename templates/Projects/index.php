<section class="profile">
  <h1 class="">Designer & Développeur Web Junior</h1>
  <p>Un développeur ne crie pas, il <strong>URL</strong>.</p>
  <figure class="svg-avatar">
    <img src="img/data/my-avatar.svg" alt="">
  </figure>
  <a href="#skills-section" class="mouse_scroll">

		<div class="mouse">
			<div class="wheel"></div>
		</div>
		<div>
			<span class="m_scroll_arrows unu"></span>
			<span class="m_scroll_arrows doi"></span>
		</div>
</a>
</section>
<figure class="svg-bottom">
  <img src="/img/data/wave-skills.svg" alt="">
</figure>
<section id="skills-section" class="skills-section">
  <div class="skills-content">
    <h2>Hey, je m'appelle Tom, enchanté de te rencontrer.</h2>
    <p>Tu es actuellement sur mon PorteFolio, sur celui ci, tu pourras y retrouver un résumé de mes compétences, les outils que j'utilise mais aussi les différents projets que j'ai réalisé. Spécialisé dans le Front-End , mais aussi dans le Back-end, je suis à même de réaliser un site web de A à Z </></p>
    <div class="hidden">H</div>
  </div>
</section>
<section class="skills-column">
  <div class="developer">
    <div class="head">
      <figure>
        <img src="img/data/code-illustration.svg" alt="">
      </figure>
      <h1>Développement</h1>
      <p>Le développement pour moi, c'est donner vie à un projet unique.</p>
    </div>
    <div class="skills">
      <h2>Language que je maitrise :</h2>
      <p>HTML, CSS, PHP, SQL, Sass, JS</p>
    </div>
    <div class="tools">
      <h3>Outils de Dev :</h3>
      <ul>
        <li>Atom</li>
        <li>CakePHP</li>
        <li>Bootstrap</li>
        <li>Github</li>
        <li>XAMPP</li>
        <li>Trello</li>
        <li>Wordpress</li>
      </ul>
    </div>
  </div>
  <div class="design">
    <div class="head">
      <figure>
        <img src="img/data/design-illustration.svg" alt="">
      </figure>
      <h1>Design</h1>
      <p>J'aime quand le rendu est professionnel, propre et minimaliste.</p>
    </div>
    <div class="skills">
      <h2>Ce que je maitrise en Design :</h2>
      <p>UI/UX Web & Mobile, Identité Graphique</p>
    </div>
    <div class="tools">
      <h3>Outils de Design :</h3>
      <ul>
        <li>Adobe XD</li>
        <li>Illustrator</li>
        <li>Photoshop</li>
        <li>Indesign</li>
        <li>Canva</li>
        <li>Stylos & Papier</li>
        <li>Un Cerveau</li>
      </ul>
    </div>
  </div>
</section>
<section class="projects">
  <h1>Mes projets</h1>
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
