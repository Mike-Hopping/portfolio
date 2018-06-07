<?php
/*
Template Name: Home
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
		</div>
	</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<!-- <div class="section-divider">
	<hr />
</div> -->

<div class="main-container">
	<div class="container-wrapper">

	<div class="main-grid sidebar-right">

		<main class="main-content">

            <div class="section-divider">
                <hr />
            </div>

            <section class="home-intro">
                <header>
                    <h2>About Me</h2>
                </header>

                <div class="home-about">
                    <p>I am an aspiring web developer and graphic artist. I have just completed the level 6 Web and UX and level 5 Web and Graphic Design diploma’s at Yoobee School of Design and I am currently looking for work in the web and UX industry. I also have many years of experience working in warehousing and distribution and a lot of general computer knowledge. I am also a big music lover and collector and also like playing computer and video games, as well as many other interests.</p>
                </div>

            </section>

                <div class="section-divider">
                    <hr />
                </div>

            <section class="home-my-work">
                <header>
                    <h2>My Work</h2>
                </header>

                <div class="row">
                    <div class="columns">
                        <a href="http://michael.hopping.wux.yoobee.net.nz/artistsalliance/"><div class="artistsalliance"></div></a>
                    </div>
                </div>
                <div class="row">
                    <div class="columns">
                        <div class="project-txt"><h4>Artists Alliance Website Redesign</h4><p>This was a redesign of a non profit organizations website, for this project I chose the Artists Alliance. This project was a simulation of sorts, of working in real world situation with a client who I am designing the website for.
						</p></div>
                    </div>
				</div>
			</section>
                <div class="section-divider">
                    <hr />
                </div>
            <section class="home-my-work">
				<div class="row">
                    <div class="columns">
                        <div class="project-txt"><h4>Designhub Website Using Behance API</h4><p>This was a group project, to create a website to display users profiles and work from Behance, using the Behance API and created using the Vue js framework. We created seperate sections and pages, which we worked on individually and compiled together using github. This was a fun project and I was happy with the way it turned out.
						</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="columns">
                        <div class="designhub"></div>
                    </div>
                </div>
            </section>
                <div class="section-divider">
                    <hr />
                </div>
            <section class="home-my-work">
				<div class="row">
                    <div class="columns">
                        <div class="climate"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="columns">
                        <div class="project-txt"><h4>CLIMATE App</h4><p>This was a group project, made using UX Pin. The idea for this was to create a mock up of the interface for a home heating app. This was an exercise in working collaboratively and task management as well as also planning of the interface design and all of the components of an app such as this. This was an interesting project and went very smoothly, with a nice end result.
						</p></div>
                    </div>
				</div>
            </section>
                <div class="section-divider">
                    <hr />
                </div>
            <section class="home-my-work">
				<div class="row">
                    <div class="columns">
                        <div class="project-txt"><h4>Fabergio Website</h4><p>This was my first attempt to create a  retail site using Woocommerce. It was a good way of learning the ins and outs of Woocommerce and was a fun website to make. I chose the idea of making it a Feberge egg store, just for fun and to make the site a bit more interesting.
						</p></div>
                    </div>
                </div>
                <div class="row">
                    <div class="columns">
                        <div class="fabergio"></div>
                    </div>
                </div>
            </section>
        </main>
		
		<!-- <?php get_sidebar(); ?> -->
	</div>
</div>
</div>
<?php get_footer();
