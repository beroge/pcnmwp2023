<?php
// Recent post widget with thumbnails
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
    function widget($args, $instance) {
            if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'vw-computer-repair-pro' );
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number )
            $number = 5;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        ) ) );
        if ($r->have_posts()) :
        ?>
        <?php echo $args['before_widget']; ?>
        <?php if ( $title ) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        } ?>
        <ul>
          <?php while ( $r->have_posts() ) : $r->the_post(); ?>
              <li>
                  <div class="row recent-post-box">
                    <div class="post-thumb <?php if(has_post_thumbnail()) { echo 'col-md-4 col-sm-4 col-12'; } ?> ">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="post-content <?php if(has_post_thumbnail()) { echo 'col-md-8 col-sm-8 col-12'; } else { echo 'col-md-12 col-sm-12 col-12'; }?>">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <?php if ( $show_date ) : ?>
                          <p class="post-date"><?php the_date(); ?></p>
                      <?php endif; ?>
                    </div>
                  </div>
              </li>
          <?php endwhile; 
          wp_reset_postdata(); ?>
        </ul>

        <?php echo $args['after_widget'];
        
        endif;
    }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');