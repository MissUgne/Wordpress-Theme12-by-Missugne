	</main>
	<footer>
		<section id="contact", class="row">
				
					<article class="contacts_column">
				<h3>Draugaukime!</h3>
				
				<ul>
				<li><a href="<?php echo get_option('twitter') ?>"></a>
				</li>
				<li><a href="<?php echo get_option('pinterest') ?>"></a>
				</li>
				</ul>
				
				<p class="inline"> 
				<address>
					<a href="mailto:info@geramada.lt">info@geramada.lt</a>
				</address></p>
				
		<h3>Prenumeruok naujienlaiškį!</h3>
					
					<form action="index.html" method="post" class="subscribe_form">
					      <input type="email" name="email" class="subscribe_input" placeholder="El. pašto adresas">
					      <button type="submit" class="subscribe_submit">Prenumeruoti</button>
					    </form>
				
			</article>
				
		</section>
		<div  id="copyright">
				<p>&copy; 2019 by Missugne</p>
			</div>
	</footer>
			<?php wp_footer(); ?>
	</body>
</html>