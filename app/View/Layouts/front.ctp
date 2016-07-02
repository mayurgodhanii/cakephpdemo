<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            Big Store - That Best Supermarket
        </title>
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="<?php echo $this->webroot; ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <link href="<?php echo $this->webroot; ?>css/style.css" rel='stylesheet' type='text/css' />
        <!-- js -->
        <script src="<?php echo $this->webroot; ?>js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo $this->webroot; ?>js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo $this->webroot; ?>js/easing.js"></script>
        <script type="text/javascript">
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});
        </script>
        <!-- start-smoth-scrolling -->
        <link href="<?php echo $this->webroot; ?>css/font-awesome.css" rel="stylesheet"> 
        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
        <!--- start-rate---->
        <script src="<?php echo $this->webroot; ?>js/jstarbox.js"></script>
        <link rel="stylesheet" href="<?php echo $this->webroot; ?>css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
jQuery(function () {
    jQuery('.starbox').each(function () {
        var starbox = jQuery(this);
        starbox.starbox({
            average: starbox.attr('data-start-value'),
            changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
            ghosting: starbox.hasClass('ghosting'),
            autoUpdateAverage: starbox.hasClass('autoupdate'),
            buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
            stars: starbox.attr('data-star-count') || 5
        }).bind('starbox-value-changed', function (event, value) {
            if (starbox.hasClass('random')) {
                var val = Math.random();
                starbox.next().text(' ' + val);
                return val;
            }
        })
    });
});
        </script>
        <!---//End-rate---->

    </head>
    <body>
        <div id="container">

            <div id="content">

                <?php echo $this->Flash->render(); ?>
                <?php echo $this->element('header'); ?>
                <?php echo $this->fetch('content'); ?>
                <?php echo $this->element('front_footer'); ?>
            </div>
            <div id="footer">
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
