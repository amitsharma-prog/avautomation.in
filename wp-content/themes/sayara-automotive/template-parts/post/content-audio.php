<?php
/**
 * Template part for displaying posts
 */
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $audio = false;

  // Only get audio from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $audio = get_media_embedded_in_content( $content, array( 'audio' ) );
  }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blogger">
    <?php if(has_post_thumbnail()) { ?>
      <div class="post-image">
        <?php
          if ( ! is_single() ) {
            // If not a single post, highlight the audio file.
            if ( ! empty( $audio ) ) {
              foreach ( $audio as $audio_html ) {
                echo '<div class="entry-audio">';
                  echo $audio_html;
                echo '</div><!-- .entry-audio -->';
              }
            };
          };
        ?>
      </div>
    <?php } ?>
    <h3><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3>
    <div class="post-info">
      <i class="fa fa-calendar" aria-hidden="true"></i><span class="entry-date"> <?php echo esc_html(get_the_date()); ?></span>
      <i class="fa fa-user" aria-hidden="true"></i><span class="entry-author"> <?php the_author(); ?></span>
      <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','sayara-automotive'), __('0 Comments','sayara-automotive'), __('% Comments','sayara-automotive') ); ?></span>
    </div>
    <p><?php the_excerpt();?></p>
    <div class="post-link">
      <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_attr_e( 'READ MORE','sayara-automotive' ); ?><i class="fas fa-angle-double-right"></i></a>
    </div>
  </div>
</article>
