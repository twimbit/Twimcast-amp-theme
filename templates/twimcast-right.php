<?php $dir_path = get_template_directory_uri(); ?>
<!--<div class="post-right content-right-nav no-print">-->
<!--    <div class="post-right-container" id="post-right-anim">-->
<!--		--><?php //if ( ( is_single() ) || ( is_page() ) ) {
//			$audio_url = get_field( 'audio_upload' )['url'];
//			if ( ! ( empty( $audio_url ) ) ) { ?>
<!--                <div class="post-read-time">-->
<!--                    <h5 style="font-size: 16px;margin-top: 30px;">Podcast</h5>-->
<!--                    <div class="amp-player-post">-->
<!--                        <amp-audio width="auto" id="amp-player" height="30" src="--><?php //echo $audio_url; ?><!--"-->
<!--                                   controlslist="nodownload">-->
<!--                            <div fallback>Your browser doesn’t support HTML5 audio</div>-->
<!--                        </amp-audio>-->
<!--                    </div>-->
<!--                </div>-->
<!--			--><?php //} ?>
<!---->
<!--		--><?php //} ?>
<!--        <div class="light-share-container hide-player" id="amp-share">-->
<!--            <svg on="tap:amp-share.toggleClass(class='hide-player')" version="1.1"  x="0px" y="0px"-->
<!--                 viewBox="0 0 31.112 31.112" xml:space="preserve" tabindex="1" role="button">-->
<!--                <polygon-->
<!--                        points="31.112,1.414 29.698,0 15.556,14.142 1.414,0 0,1.414 14.142,15.556 0,29.698 1.414,31.112 15.556,16.97 29.698,31.112 31.112,29.698 16.97,15.556 "/>-->
<!--            </svg>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="post-playlist">-->
<!--        <input type=text placeholder="Playlist" name=share id=post-subscribe aria-label="Search imput"/>-->
<!--        <div class="post-subscribe">-->
<!--            <a href="#">Subscribe</a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->

<div class="MuiBox-root jss729 share_single desktop-view">
    <div class="MuiBox-root jss730">
        <div class="MuiButtonBase-root MuiIconButton-root" tabindex="0" type="button"
                aria-haspopup="true"
                id="dropdownMenuButtonShare" data-toggle="dropdown">
                                    <span class="MuiIconButton-label">
                                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false"
                                             viewBox="0 0 24 24" aria-hidden="true" aria-haspopup="true">
                                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"></path></svg></span><span
                    class="MuiTouchRipple-root">
                                    </span>
        </div>

        <div class="dropdown-menu dropdown-menu-share"
             aria-labelledby="dropdownMenuButtonShare">
            <a class="fb-share"
               href="http://www.facebook.com/sharer.php?u=<?= 'https://' . SERVER_ROOT . $url; ?>"
               target="_blank">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"></path>
                </svg>
                <span>facebook</span>
            </a>

            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= 'https://' . SERVER_ROOT . $url; ?>"
               class="fb-share" target="_blank">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"></path>
                </svg>
                <span>linkedin</span>
            </a>
            <!-- Email Social Media -->
            <a class="fb-share"
               href="mailto:?Subject=<?= $post->title; ?>&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20<?= 'https://' . SERVER_ROOT . $url; ?>">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"></path>
                </svg>
                <span>Mail</span>
            </a>
            <!-- Twitter Social Media -->
            <a class="fb-share"
               href="https://twitter.com/share?url=<?= 'https://' . SERVER_ROOT . $url; ?>"
               target="_blank">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"></path>
                </svg>
                <span>twitter</span>
            </a>
            <a class="fb-share"
               href="https://web.whatsapp.com/send?text=<?= 'https://' . SERVER_ROOT . $url; ?>"
               target="_blank" data-action="share/whatsapp/share">
                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeLarge" focusable="false"
                     viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
                </svg>
                <span>whatspp</span>
            </a>
        </div>
    </div>
</div>
