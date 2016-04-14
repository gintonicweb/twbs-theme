<?php
use Cake\Core\Configure;
use Cake\I18n\I18n;

$languages = Configure::read('Languages');
?>

<?php if (!empty($languages)) : ?>
    <div class="pull-right">
        <div class="btn-group dropup">
            <i class="fa fa-globe text-muted"></i>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= __('Languages') ?>
            </a>
            <ul class="text-muted dropdown-menu">
                <?php foreach ($languages as $value => $language) : ?>
                    <li<?= $value == I18n::locale() ? ' class="active"' : '' ?>>
                        <?= $this->Html->link(
                            $language,
                            ['lang' => $value]
                        ) ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
<?php endif ?>
