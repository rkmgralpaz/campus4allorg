<?php get_header(); ?>

<?php

while (have_posts()):
	the_post();

	// ── Password protection check ──────────────────────────
	if (post_password_required()) {
		echo get_the_password_form();
		continue;
	}
	// ───────────────────────────────────────────────────────

	include 'partials/page-header.php';

	include 'partials/global-modules.php';

endwhile;


?>


<?php get_footer(); ?>