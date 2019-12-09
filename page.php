<?php get_header();
$dir_path = get_template_directory_uri();
?>

<main id="site-content" role="main" style="height:100vh;padding:0">
    <section id="twimcast-sidebar">
        <div class="twimcast-sidebar-container">
            <?php get_template_part('templates/twimcast', 'sidebar'); ?>
        </div>
    </section>
    <section class="postArea">
        <div class="postArea-container">
            <div id="main-post-area" class="post-div">
                <?php $file_url = get_fields(get_queried_object(), 'pdf_file');
                if (!(empty($file_url))) { ?>
                    <div class="post-container" style="height: 99%;margin:0">
                        <iframe height="100%" width="100%" src="<?php echo $dir_path; ?>/web/viewer.html" frameborder="0"></iframe>
                    </div>
                <?php } else { ?>
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
                <?php }
                ?>
            </div>
            <?php get_template_part('templates/twimcast', 'right') ?>
        </div>
    </section>
</main><!-- #site-content -->

<?php
get_footer();
