<?php
/**
 * The default template for displaying content
 * @package Carpenter Shop
 * @since 1.0.0
 */

$carpenter_shop_default = carpenter_shop_get_default_theme_options();
$image_size = 'large';
global $carpenter_shop_archive_first_class; 
$archive_classes = [
    'theme-article-post',
    'theme-article-animate',
    $carpenter_shop_archive_first_class
];?>

<article id="post-<?php the_ID(); ?>" <?php post_class($archive_classes); ?>>
    <div class="theme-article-image">
        <div class="entry-thumbnail">
            <?php
            if (is_search() || is_archive() || is_front_page()) {
                $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                $featured_image = isset( $featured_image[0] ) ? $featured_image[0] : ''; ?>
                <div class="post-thumbnail data-bg data-bg-big"
                     data-background="<?php echo esc_url( $featured_image ); ?>">
                    <a href="<?php the_permalink(); ?>" class="theme-image-responsive" tabindex="0"></a>
                </div>
                <?php
            } else {
                carpenter_shop_post_thumbnail($image_size);
            }
            carpenter_shop_post_format_icon(); ?>
        </div>
    </div>
    <div class="theme-article-details">
        <div class="entry-meta-top">
            <div class="entry-meta">
                <?php carpenter_shop_entry_footer($cats = true, $tags = false, $edits = false); ?>
            </div>
        </div>
        <header class="entry-header">
            <h2 class="entry-title entry-title-medium">
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <span><?php the_title(); ?></span>
                </a>
            </h2>
        </header>
        <div class="entry-content">

            <?php
            if (has_excerpt()) {

                the_excerpt();

            } else {

                echo '<p>';
                echo esc_html(wp_trim_words(get_the_content(), 10, '...'));
                echo '</p>';
            }

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'carpenter-shop'),
                'after' => '</div>',
            )); ?>

        </div>
        <a href="<?php the_permalink(); ?>" rel="bookmark" class="theme-btn-link">
          <span> <?php esc_html_e('Read More', 'carpenter-shop'); ?> </span>
          <span class="topbar-info-icon"><?php carpenter_shop_the_theme_svg('arrow-right-1'); ?></span>
        </a>
    </div>
</article>