<footer class="site-footer">
   <div class="container">
        <div class="copyright">
            <p> <?php get_theme_mod('set_copyright','copyright x-all rights reserved');?></p>
        </div>
        <nav class="footer-menu">
            <?php wp_nav_menu(array('theme_location'=>__('wp_devs','wp-devs_footer_menu'),'depth'=> '1',''=> '1'));?>
        </nav>
   </div>
<?php wp_footer();?>
</footer>


</html>
<body>