	<div id="comment-sidebar">
		<div class="disqus_comments" style="padding:15px;">
			<div id="disqus_thread"></div>
			<script type="text/javascript">
			var disqus_shortname = '<?php echo !empty($disqus_username)?$disqus_username:"arrizalamin" ?>';
			var disqus_identifier  = <?php echo $id ?>;
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
		</div>
	</div>