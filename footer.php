 <footer>
        	<?php if(has_menu_items()) :?>
        	<?php while(menu_items()) : ?>
	        <a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a>
	        <?php endwhile; ?>
	        <?php endif; ?>

        </footer>
        </section><!-- CONTAINER -->
        <script src="_scripts/plugins.js"></script>
        <script src="_scripts/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
