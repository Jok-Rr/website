<section class="profile margin-center">
  <div class="me ">
    <h1>Designer & Developeur Web Junior</h1>
    <p>I design and code beautifully simple things, and I love what I do.</p>
    <figure>
      <img src="img/data/mf-avatar.svg" alt="">
    </figure>
  </div>
  <figure class="svg-bottom">
    <img src="img/data/hero.svg" alt="">
  </figure>
</section>
<section class="skills">
  <div>
    <h2>Hi, I’m Matt. Nice to meet you.</h2>
    <p>Since beginning my journey as a freelance designer nearly 10 years ago, I've done remote work for agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use. I'm quietly confident, naturally curious, and perpetually working on improving my chops one design problem at a time.</p>
  </div>
</section>
<section class="skills-column">
  <div class="developer">
    <figure>
      <img src="img/data/frontend.svg" alt="">
    </figure>
    <h1>Développeur</h1>
    <p>I value simple content structure, clean design patterns, and thoughtful interactions.</p>
    <p>Things I enjoy designing:</p>
    <p>UX, UI, Web, Mobile, Apps, Logos</p>
    <p>Design Tools:</p>
    <ul>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
    </ul>
  </div>
  <div class="design">
    <figure>
      <img src="img/data/frontend.svg" alt="">
    </figure>
    <h1>Développeur</h1>
    <p>I value simple content structure, clean design patterns, and thoughtful interactions.</p>
    <p>Things I enjoy designing:</p>
    <p>UX, UI, Web, Mobile, Apps, Logos</p>
    <p>Design Tools:</p>
    <ul>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
      <li>Balsamiq Mockups</li>
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
  <section class="section">
    <div class="columns">
      <div class="column">
        First column
      </div>
      <div class="column">
        Second column
      </div>
      <div class="column">
        Third column
      </div>
      <div class="column">
        Fourth column
      </div>
    </div>
  </section>
