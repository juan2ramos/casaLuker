<?php get_header();
$date = explode(' ', get_the_date('d F'));
$first = ($query->current_post == 0) ? true : false;
?>
<main class="Main newsAndEvent">
    <section class="news">


            <article>
                <figure>
                    <?php the_post_thumbnail(); ?>
                    <date><?php echo $date[0] . '<span>' . substr($date[1], 0, 3) . '</span>'; ?></date>
                </figure>
                <div class="content-news single">
                    <h2><?php echo $post->post_title; ?></h2>

                    <div style=" max-height: none;     padding-bottom: 2rem;"><?php echo $post->post_content; ?></div>
                    <button class="lessNews ">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32">
                            <path fill="#000" d="M16 31l15-15h-9v-16h-12v16h-9z"></path>
                        </svg>
                    </button>
                </div>
                <span class="borderBottom"></span>
            </article>

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
