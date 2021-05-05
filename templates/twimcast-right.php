<?php $dir_path = get_template_directory_uri(); ?>
<div class="post-right content-right-nav no-print">
    <div class="post-right-container" id="post-right-anim">
		<?php if ( ( is_single() ) || ( is_page() ) ) {
			$audio_url = get_field( 'audio_upload' )['url'];
			if ( ! ( empty( $audio_url ) ) ) { ?>
                <div class="post-read-time">
                    <h5 style="font-size: 16px;margin-top: 30px;">Podcast</h5>
                    <div class="amp-player-post">
                        <amp-audio width="auto" id="amp-player" height="30" src="<?php echo $audio_url; ?>"
                                   controlslist="nodownload">
                            <div fallback>Your browser doesn’t support HTML5 audio</div>
                        </amp-audio>
                    </div>
                </div>
			<?php } ?>

		<?php } ?>
        <div class="light-share-container hide-player" id="amp-share">
            <svg on="tap:amp-share.toggleClass(class='hide-player')" version="1.1"  x="0px" y="0px"
                 viewBox="0 0 31.112 31.112" xml:space="preserve" tabindex="1" role="button">
                <polygon
                        points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 29.698,31.112 31.112,29.698 16.97,15.556 "/>
            </svg>
        </div>
    </div>
    <div class="post-playlist">
        <input type=text placeholder="Playlist" name=share id=post-subscribe aria-label="Search imput"/>
        <div class="post-subscribe">
            <a href="#">Subscribe</a>
        </div>
    </div>

</div>