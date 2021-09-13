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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?= $cakeDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap">

  <?= $this->Html->css(['main', 'normalize']) ?>
  <?= $this->Html->script('jquery'); ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>

</head>
<script>

</script>

<body>
  <nav class="top-nav">
    <div class="top-nav-title">
      <figure>
        <img  class="logo" src="img/data/logo-tb.svg" alt="">
      </figure>
    </div>
    <div class="top-nav-links">

      <?= $this->Html->link('<i class="fas fa-plus" aria-hidden="true"></i>Accueil', ['controller' => 'Projects', 'action' => 'index'], ['escape' => false, 'class' => ($this->templatePath == 'Projects' && $this->template == 'index') ? 'active' : '']) ?>

      <?php if ($this->request->getAttribute('identity') == null) { ?>

        <?= $this->Html->link('<i class="fas fa-lock" aria-hidden="true"></i>Connexion', ['controller' => 'Users', 'action' => 'login'], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'login') ? 'active' : '']) ?>

        <?php } else {

        if ($this->request->getAttribute('identity')->level == 'admin') { ?>

          <?= $this->Html->link('<i class="fas fa-plus" aria-hidden="true"></i>manager de projet', ['controller' => 'Projects', 'action' => 'manager'], ['escape' => false, 'class' => ($this->templatePath == 'Projects' && $this->template == 'manager') ? 'active' : '']) ?>

        <?php } ?>

        <?= $this->Html->link('<i class="fas fa-sign-out-alt" aria-hidden="true"></i>Déconnexion', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'logout') ? 'active' : '']) ?>
      <?php } ?>
    </div>
  </nav>
  <main class="main">
    <div class="container">
      <?= $this->Flash->render() ?>
      <?= $this->fetch('content') ?>
    </div>
  </main>
  <footer>
  </footer>

</body>

</html>