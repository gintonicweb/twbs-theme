<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <?= $this->Html->meta('icon') ?>

        <title>
            <?= $this->fetch('title') ?>
        </title>

        <?= $this->Html->css('twbs-default') ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?= $this->element('top_menu')?>
        <?= $this->Flash->render(); ?>

        <div class="container">
            <?= $this->fetch('content'); ?>	                    
        </div>

        <footer class="footer">
          <div class="container">
            <p class="text-muted">Powered by <a href="https://github.com/gintonicweb/GintonicCMS">GintonicCMS</a> from <a href="http://gintonicweb.com">Gintonic Web</a> </p>
          </div>
        </footer>
        <?= $this->Require->module('jquery');?>
        <?= $this->Require->module('bootstrap');?>
        <?= $this->Require->load('Requirejs.require', 'TwbsTheme.config', [
            'TwbsTheme.base',
            'Images.config',
        ]); ?>
    </body>
</html>




