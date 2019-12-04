<?php get_header(); ?>

<main id="site-content" role="main">
    <section id="twimcast-sidebar">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </section>
    <section class="postArea">
        <div class="postArea-container">
            <div id="main-post-area" class="post-div">
                <div class="post-container">
                    <div class="post-image">
                        <amp-img src='https://playground.amp.dev/static/samples/img/image2.jpg' height="250" layout="fixed-height" alt="a sample image"></amp-img>
                    </div>
                    <div class="post-title">
                        <h3>
                            Customer Experience
                        </h3>
                        <div class="post-author-name">
                            <p><span>Jessi</span><span>CX</span></p>
                        </div>
                    </div>
                    <div class="post-excerpt">
                        <p>A deep dive into how you can provide better customer experience at respective industries.</p>
                    </div>
                    <div class="recomended-posts">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero omnis est eum magnam sequi maxime expedita qui. Magnam quo iste, aspernatur qui ad et doloribus quasi! Excepturi magni sapiente, dolores ea incidunt repellat repellendus, pariatur unde nostrum saepe eius! Nisi voluptatibus earum labore, at nemo necessitatibus laboriosam optio tenetur, minima minus natus cupiditate, deleniti cum veniam veritatis ut repellendus delectus. Dolorem, ratione? Sapiente soluta accusamus qui ipsam quo tempore! Debitis rerum voluptates labore molestiae pariatur beatae, ex quia distinctio? Earum modi laboriosam enim delectus dolore voluptas. Iste reprehenderit beatae ullam vitae, dignissimos, labore accusantium ducimus suscipit reiciendis sequi quibusdam nisi?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint deleniti dolores beatae eaque, doloribus placeat aspernatur fugiat non et totam facere minus pariatur praesentium atque assumenda perspiciatis dicta ratione. Inventore, fugiat deleniti. Repudiandae unde iste ipsa, velit in eaque quod. Harum reprehenderit quod quidem architecto, repudiandae minima, assumenda error atque exercitationem suscipit accusamus saepe maiores doloremque, nihil autem. Ab vero quos asperiores iure ipsum delectus nisi quaerat similique praesentium totam, sequi voluptatibus, obcaecati eius quis repudiandae sit eveniet, qui ut? Fuga ab neque quam maiores id, incidunt cum ex vitae error modi voluptatibus fugiat in exercitationem optio earum perferendis, impedit eaque corrupti corporis eius qui voluptatum libero deleniti? A ducimus excepturi delectus soluta nostrum saepe labore quasi corrupti quia? Consequuntur quasi pariatur numquam at eaque! Veniam officia quos, reprehenderit consectetur temporibus optio debitis nostrum dolore quis fugiat aspernatur aliquam nesciunt accusantium numquam recusandae asperiores sed quaerat, fugit in facilis officiis! Quaerat aut quibusdam possimus, tempora laudantium ipsum libero alias rem, repellendus, suscipit harum assumenda explicabo neque vel? Et in expedita autem nemo iste! Nostrum laudantium at illum labore facere iusto minus sunt itaque! Vel, sunt soluta. Officiis et eaque vero, quia error veniam consequuntur iste. Cupiditate, quas consectetur! Deserunt, optio!</p>
                    </div>
                </div>
            </div>
            <div class="post-right">
                <div class="post-right-container">
                    <a href="#">
                        <div class="post-share">
                            <div class="share-text">
                                Share
                            </div>
                            <div class="share-icon">
                                <span>999</span>
                                <div class="share-svg">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
                                        <path d="M 20 0 C 17.789063 0 16 1.789063 16 4 C 16 4.277344 16.039063 4.550781 16.09375 4.8125 L 7 9.375 C 6.265625 8.535156 5.203125 8 4 8 C 1.789063 8 0 9.789063 0 12 C 0 14.210938 1.789063 16 4 16 C 5.203125 16 6.265625 15.464844 7 14.625 L 16.09375 19.1875 C 16.039063 19.449219 16 19.722656 16 20 C 16 22.210938 17.789063 24 20 24 C 22.210938 24 24 22.210938 24 20 C 24 17.789063 22.210938 16 20 16 C 18.796875 16 17.734375 16.535156 17 17.375 L 7.90625 12.8125 C 7.960938 12.550781 8 12.277344 8 12 C 8 11.722656 7.960938 11.449219 7.90625 11.1875 L 17 6.625 C 17.734375 7.464844 18.796875 8 20 8 C 22.210938 8 24 6.210938 24 4 C 24 1.789063 22.210938 0 20 0 Z" /></svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="post-playlist">
                    <input type=text placeholder="Playlist" name=share id=post-subscribe aria-label="Search imput" />
                    <div class="post-subscribe">
                        <a href="#">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
