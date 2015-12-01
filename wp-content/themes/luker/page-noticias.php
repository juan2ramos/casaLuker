<?php get_header(); ?>
    <main class="Main newsAndEvent">
        <section class="news">
            <?php

            $args = array('post_type' => 'registerNews', 'order' => 'DESC', 'paged' => $paged, 'posts_per_page' => 1);
            $query = new WP_Query($args);

            while ($query->have_posts()) : $query->the_post();
                $date = explode(' ', get_the_date('d F'));
                $first = ($query->current_post == 0) ? true : false;
                ?>

                <article>

                    <?php if (has_post_thumbnail()) : ?>
                        <figure>
                            <?php the_post_thumbnail(); ?>
                            <date><?php echo $date[0] . '<span>' . substr($date[1], 0, 3) . '</span>'; ?></date>
                        </figure>
                    <?php else: ?>
                        <figure style="width: 300px; height: 259px; background: transparent">

                            <date><?php echo $date[0] . '<span>' . substr($date[1], 0, 3) . '</span>'; ?></date>
                        </figure>
                    <?php endif ?>
                    <div class="content-news">
                        <h2><?php echo $post->post_title; ?></h2>

                        <div class="font-size: 0.7em; "><?php echo $post->post_content; ?></div>
                        <!--<button class="lessNews <?php /*if($first) echo 'show' */ ?>">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                                <path fill="#000" d="M16 31l15-15h-9v-16h-12v16h-9z"></path>
                            </svg>
                        </button>-->
                    </div>
                    <span class="borderBottom"></span>
                    <a href=" <?php  echo get_permalink($post->ID) ?>">
                        <button class="moreNews"><span "></span><span></span></button>
                    </a>
                </article>
            <?php endwhile; ?>
            <div class="Pagination">
                <?php if (function_exists('wp_corenavi')) wp_corenavi($query);
                wp_reset_query(); ?>
            </div>
        </section>

        <section class="events">
            <div class="events-contents">
                <h3>EVENTS</h3>
                <?php

                $args = array('post_type' => 'registerEvents', 'order' => 'DESC');
                $query = new WP_Query($args);

                while ($query->have_posts()) : $query->the_post(); ?>
                    <article>
                        <ul>
                            <li>
                                <h4><?php echo $post->post_title; ?></h4>

                                <p><?php echo $post->post_content; ?></p>
                            </li>
                        </ul>
                    </article>
                    <?php wp_reset_query(); endwhile; ?>
            </div>
        </section>
    </main>
<?php get_footer(); ?>