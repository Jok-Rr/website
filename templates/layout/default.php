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

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
    <?php if($this->request->getAttribute('identity') == null){ ?>

      <?= $this->Html->link('<i class="fas fa-user-plus" aria-hidden="true"></i>Inscription', ['controller' => 'Users', 'action' => 'new'], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'new') ? 'active' : '']) ?>

      <?= $this->Html->link('<i class="fas fa-lock" aria-hidden="true"></i>Connexion', ['controller' => 'Users', 'action' => 'login'], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'login') ? 'active' : '']) ?>

    <?php }else{
        
      if($this->request->getAttribute('identity')->level == 'admin' || $this->request->getAttribute('identity')->level == 'editor'){?>
        <?= $this->Html->link('<i class="fas fa-plus" aria-hidden="true"></i>Ajouter un jeux', ['controller' => 'Games', 'action' => 'new'], ['escape' => false, 'class' => ($this->templatePath == 'Games' && $this->template == 'new') ? 'active' : '']) ?>
      <?php } ?>
      <?= $this->Html->link('<i class="fas fa-user" aria-hidden="true"></i>Mon profil', ['controller' => 'Users', 'action' => 'profil', $this->request->getAttribute('identity')->id], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'profil') ? 'active' : '']) ?>
      <?= $this->Html->link('<i class="fas fa-sign-out-alt" aria-hidden="true"></i>Déconnexion', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false, 'class' => ($this->templatePath == 'Users' && $this->template == 'logout') ? 'active' : '']) ?>
    <?php } ?>
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
