<?php

Kirki::add_field( 'rohas', array(
	'type'        => 'repeater',
	'settings'     => 'rohas_social_links',
	'label'       => esc_attr__( 'Add social icon', 'rohas-lite' ),
	'section'     => 'rohas_social',
	'fields' => array(
		'icon' => array(
			'type'        => 'select',
			'label'       => __( 'Icon', 'rohas-lite' ),
			'choices'     => array(
				'500px' => esc_attr__( '500px', 'rohas-lite' ),
				'android' => esc_attr__( 'Android', 'rohas-lite' ),
				'angellist' => esc_attr__( 'Angel List', 'rohas-lite' ),
				'behance' => esc_attr__( 'Behance', 'rohas-lite' ),
				'bitbucket' => esc_attr__( 'Bitbucket', 'rohas-lite' ),
				'codepen' => esc_attr__( 'Codepen', 'rohas-lite' ),
				'deviantart' => esc_attr__( 'DeviantArt', 'rohas-lite' ),
				'dribbble' => esc_attr__( 'dribbble', 'rohas-lite' ),
				'facebook' => esc_attr__( 'Facebook', 'rohas-lite' ),
				'flickr' => esc_attr__( 'Flickr', 'rohas-lite' ),
				'foursquere' => esc_attr__( 'Four Squere', 'rohas-lite' ),
				'git' => esc_attr__( 'git', 'rohas-lite' ),
				'github' => esc_attr__( 'GitHub', 'rohas-lite' ),
				'gitlab' => esc_attr__( 'GitLab', 'rohas-lite' ),
				'google' => esc_attr__( 'Google', 'rohas-lite' ),
				'hacker-news' => esc_attr__( 'Hacker News', 'rohas-lite' ),
				'instagram' => esc_attr__( 'Instagram', 'rohas-lite' ),
				'jsfiddle' => esc_attr__( 'JSFiddle', 'rohas-lite' ),
				'lastfm' => esc_attr__( 'Last FM', 'rohas-lite' ),
				'leanpub' => esc_attr__( 'Leanpub', 'rohas-lite' ),
				'linkedin' => esc_attr__( 'LinkedIn', 'rohas-lite' ),
				'medium' => esc_attr__( 'medium', 'rohas-lite' ),
				'pinterest' => esc_attr__( 'Pinterest', 'rohas-lite' ),
				'product-hunt' => esc_attr__( 'Product Hunt', 'rohas-lite' ),
				'reddit' => esc_attr__( 'reddit', 'rohas-lite' ),
				'scribd' => esc_attr__( 'Scribd', 'rohas-lite' ),
				'slack' => esc_attr__( 'slack', 'rohas-lite' ),
				'slideshare' => esc_attr__( 'SlideShare', 'rohas-lite' ),
				'snapchat-ghost' => esc_attr__( 'Snapchat', 'rohas-lite' ),
				'soundcloud' => esc_attr__( 'SoundCloud', 'rohas-lite' ),
				'stack-exchange' => esc_attr__( 'Stack Exchange', 'rohas-lite' ),
				'stack-overflow' => esc_attr__( 'Stack Overflow', 'rohas-lite' ),
				'steam' => esc_attr__( 'Steam', 'rohas-lite' ),
				'trello' => esc_attr__( 'Trello', 'rohas-lite' ),
				'tumblr' => esc_attr__( 'tumblr', 'rohas-lite' ),
				'twitch' => esc_attr__( 'Twitch', 'rohas-lite' ),
				'twitter' => esc_attr__( 'Twitter', 'rohas-lite' ),
				'vimeo' => esc_attr__( 'vimeo', 'rohas-lite' ),
				'youtube-play' => esc_attr__( 'YouTube', 'rohas-lite' ),
			),
		),
		'url' => array(
			'type'        => 'text',
			'label'       => __( 'URL', 'rohas-lite' ),
		),
	)
) );
