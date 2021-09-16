<?php

/**
* CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
* @link          https://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       https://opensource.org/licenses/mit-license.php MIT License
* @var \App\View\AppView $this
*/

?>
<!DOCTYPE html>
<html>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tom Bost | Portfolio</title>
  <link rel="shortcut icon" type="image/svg" href="/favicon.svg"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700;800;900&family=Roboto:wght@300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap">
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
  <?= $this->Html->css(['main', 'normalize', 'animate']) ?>
  <?= $this->Html->script('jquery'); ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>

</head>
<script>

</script>

<body>
  <nav class="top-nav margin-center">
    <div class="top-nav-logo">
      <figure>
        <a href="/"><img  class="logo" src="/img/data/logo-tb.svg" alt=""></a>
      </figure>
    </div>
    <div class="top-nav-links">

      <?= $this->Html->link('Accueil', ['controller' => 'Projects', 'action' => 'index'], ['escape' => false, 'class' => ($this->templatePath == 'Projects' && $this->template == 'index') ? 'active' : '']) ?>

      <button type="button" name="button" disabled>Contact</button>

      <?php if ($this->request->getAttribute('identity') == null) { ?>

        <?= $this->Html->link('<i class="fas fa-user-alt" aria-hidden="true"></i>', ['controller' => 'Users', 'action' => 'login'], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'login') ? 'active' : '']) ?>


      <?php } else {
    if ($this->request->getAttribute('identity')->level == 'admin') { ?>

          <?= $this->Html->link('<i class="fas fa-plus" aria-hidden="true"></i>manager de projet', ['controller' => 'Projects', 'action' => 'manager'], ['escape' => false, 'class' => ($this->templatePath == 'Projects' && $this->template == 'manager') ? 'active' : '']) ?>

        <?php } ?>

        <?= $this->Html->link('<i class="fas fa-sign-out-alt" aria-hidden="true"></i>Déconnexion', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'logout') ? 'active' : '']) ?>
        <?php
} ?>
    </div>
  </nav>
  <main class="main">
    <div class="container">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </div>
  </main>
  <figure class="wave-footer">
    <img src="/img/data/wave-footer.svg" alt="">
  </figure>
  <footer>
    <div class="background-content">
      <div class="social">
        <a href="https://www.linkedin.com/in/tombost/" target=”_blank” ><i class="fab fa-linkedin"></i></a>
      </div>
      <p class="copyright">Créer avec le ❤️ par <strong>Tom Bost ©️ Septembre 2021</strong></p>
    </div>
  </footer>

</body>

</html>
