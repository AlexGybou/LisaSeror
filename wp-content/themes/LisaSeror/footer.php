			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/share-button.js"></script>
		<script> var config = {
			networks: {
				googlePlus: {
							enabled:false // Enable Google+. [Default: true]

						},
						twitter: {
							enabled:false      // Enable Twitter. [Default: true]

						},
						facebook: {
							enabled:true      // Enable Facebook. [Default: true]
							// image to be shared to Facebook [Default: config.image]
						},
						pinterest: {
							enabled:false      // Enable Pinterest. [Default: true]
							// text to be shared alongside your link to Pinterest [Default: config.description]
						},
						reddit: {
							enabled:false  // Enable Reddit. [Default: true]

						},
						linkedin: {
							enabled:false      // Enable LinkedIn. [Default: true]

						},
						whatsapp: {
							enabled:false      // Enable WhatsApp. [Default: true]

						},
						email: {
							enabled:true      // Enable Email. [Default: true]

						}
					}
				}
				var share = new ShareButton(config);
			</script>

			<!-- analytics -->
			<script>
				(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
					(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
					l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
				ga('send', 'pageview');
			</script>


		</body>
		</html>
