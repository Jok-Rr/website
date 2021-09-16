<section class="login-page">
  <figure class="svg-bottom">
    <img src="/img/data/my-avatar.svg" alt="">
  </figure>
  <h1>Le Back-End du porteFolio de Tom Bost</h1>
  <div class="login-section">
    <div class="login-form">
      <?= $this->Form->create() ?>
      <?= $this->Form->control('login', ['placeholder' => 'Identifiant']) ?>
      <?= $this->Form->control('password', ['placeholder' => 'Mot de passe']) ?>
    </div>
    <?= $this->Form->button(__('Connexion')); ?>
    <?= $this->Form->end() ?>
  </div>
</section>
