    </div><!--/.container-->
    
    <footer class="footer">
    	<div class="container">
	        <?php if (ENVIRONMENT == 'development') :?>
				<p style="float: right; margin-right: 80px;">P&aacute;gina cargada en {elapsed_time} segundos, usando {memory_usage}.</p>
			<?php endif; ?>
	
			<p>Desarrollado por <a href="http://cibonfire.com" target="_blank">Bonfire <?php echo BONFIRE_VERSION ?></a></p>
		</div>
	</footer>
	
	<?php echo theme_view('parts/modal_login'); ?>

	<div id="debug"></div>
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo js_path(); ?>jquery-1.7.2.min.js"><\/script>')</script>

  <!-- This would be a good place to use a CDN version of jQueryUI if needed -->
	<?php echo Assets::js(); ?>

</body>
</html>
