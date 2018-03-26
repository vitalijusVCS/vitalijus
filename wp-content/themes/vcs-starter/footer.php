	</main>
	<footer>
		<div class="foot">
			<div class="news">
				<h5>Sužinok pirmas!</h5>
				<h6>Gauti naujienas į el. paštą</h6>
				<form>
					<input type="email" name="email" placeholder="Mano el.paštas" id="newsinp">
					<input type="submit" name="submit" value="Užsisakyti" id="newsbtn">
				</form>
			</div>
			<div class="social">
				<a href="<?php the_field('facebook_link', 158); ?>"><i class="fa fa-facebook-square"></i></a>
				<a href="<?php the_field('twitter_link', 158); ?>"><i class="fa fa-twitter-square"></i></a>
				<a href="<?php the_field('google_link', 158); ?>"><i class="fa fa-google-plus-square"></i></a>
			</div>
			<div class="infocontainer">
				<h5>Susisiekite</h5>
				<p><i class="fa fa-phone-square bb"></i><?php the_field('phone_number', 158); ?></p>
				<p><i class="fa fa-envelope-square bb"></i><?php the_field('email', 158); ?></p>
				<p><i class="fa fa-map-marker bb"></i><?php the_field('adress', 158); ?></p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>