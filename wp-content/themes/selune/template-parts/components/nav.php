<?php
    $siteLogo = get_field('site_logo', 'option');
?>

<nav class="site-nav">
		<div class="nav-inner">
			<div class="top-bar">
				<div class="site-logo1">
					<a href="<?php _e( home_url( '/' ) ); ?>">
                        <?php if($siteLogo): ?>
                            <img <?php if($txtColor == "white"): ?> style="filter: invert(100%);"<?php endif; ?> src="<?= $siteLogo['url'] ?>" alt="<?= $globalSite['name'] ?>">
                        <?php endif; ?>
					</a>
				</div>
				<div class="menu-button1 js-menu-toggle">
					<span></span>
					<span></span>
				</div>
			</div>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu','container' => '' ) ); ?>
			<div class="search-button">
				<svg id="search" width="57" height="39" viewBox="0 0 57 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M57 34.744 39.184 26.11a18.928 18.928 0 0 0 1.242-6.61c0-5.172-2.13-10.132-5.922-13.789C30.715 2.054 25.574 0 20.212 0 14.852 0 9.71 2.054 5.92 5.711 2.129 9.368 0 14.328 0 19.5c.011 5.168 2.144 10.122 5.932 13.776 3.789 3.655 8.923 5.713 14.28 5.724a20.94 20.94 0 0 0 9.73-2.32 20.093 20.093 0 0 0 7.4-6.521l17.816 8.593L57 34.744Zm-36.788-.248c-4.12-.01-8.067-1.594-10.98-4.404-2.913-2.81-4.553-6.618-4.565-10.592 0-3.982 1.636-7.8 4.55-10.62 2.915-2.818 6.868-4.407 10.995-4.418 4.127.01 8.08 1.6 10.995 4.419 2.914 2.819 4.55 6.637 4.55 10.619-.011 3.974-1.652 7.782-4.565 10.592-2.913 2.81-6.86 4.393-10.98 4.404Z" fill="#fff"></path></svg>
			</div>
			<div class="search-form">
				<div class="top-bar">
					<div class="site-logo1">
                        <a href="<?php _e( home_url( '/' ) ); ?>">
                            <?php if($siteLogo): ?>
                                <img <?php if($txtColor == "white"): ?> style="filter: invert(100%);"<?php endif; ?> src="<?= $siteLogo['url'] ?>" alt="<?= $globalSite['name'] ?>">
                            <?php endif; ?>
                        </a>
					</div>
					<div class="menu-button1 js-menu-toggle1">
						<span></span>
						<span></span>
					</div>
				</div>
                <form action="/sok" method="get">
                    <button type="submit"><svg width="57" height="39" viewBox="0 0 57 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M57 34.744 39.184 26.11a18.928 18.928 0 0 0 1.242-6.61c0-5.172-2.13-10.132-5.922-13.789C30.715 2.054 25.574 0 20.212 0 14.852 0 9.71 2.054 5.92 5.711 2.129 9.368 0 14.328 0 19.5c.011 5.168 2.144 10.122 5.932 13.776 3.789 3.655 8.923 5.713 14.28 5.724a20.94 20.94 0 0 0 9.73-2.32 20.093 20.093 0 0 0 7.4-6.521l17.816 8.593L57 34.744Zm-36.788-.248c-4.12-.01-8.067-1.594-10.98-4.404-2.913-2.81-4.553-6.618-4.565-10.592 0-3.982 1.636-7.8 4.55-10.62 2.915-2.818 6.868-4.407 10.995-4.418 4.127.01 8.08 1.6 10.995 4.419 2.914 2.819 4.55 6.637 4.55 10.619-.011 3.974-1.652 7.782-4.565 10.592-2.913 2.81-6.86 4.393-10.98 4.404Z" fill="#fff"></path></svg></button>
                    <input type="text" name="s" id="search" placeholder="Søk" value="<?php the_search_query(); ?>" />
                    <div class="menu-button1 js-menu-toggle1">
						<span></span>
						<span></span>
					</div>
                </form>
			</div>
		</div>
	</nav>