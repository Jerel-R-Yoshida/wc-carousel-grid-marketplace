<?php
defined('ABSPATH') || exit;

$post_id = $post->ID ?? 0;
$enabled = get_post_meta($post_id, '_welp_enabled', true) === 'yes';
$popular = get_post_meta($post_id, '_welp_popular', true) === 'yes';
$specialization = get_post_meta($post_id, '_welp_specialization', true);
?>

<div class="wc-cgm-meta-box">
    <p class="wc-cgm-field">
        <label>
            <input type="checkbox" name="welp_enabled" value="yes" <?php checked($enabled); ?>>
            <?php esc_html_e('Enable for Marketplace', 'wc-carousel-grid-marketplace'); ?>
        </label>
        <span class="description"><?php esc_html_e('Show this product in marketplace carousel/grid.', 'wc-carousel-grid-marketplace'); ?></span>
    </p>

    <p class="wc-cgm-field">
        <label>
            <input type="checkbox" name="welp_popular" value="yes" <?php checked($popular); ?>>
            <?php esc_html_e('Mark as Popular', 'wc-carousel-grid-marketplace'); ?>
        </label>
        <span class="description"><?php esc_html_e('Display "Popular" badge on this product (manual override).', 'wc-carousel-grid-marketplace'); ?></span>
    </p>

    <p class="wc-cgm-field">
        <label for="welp_specialization"><?php esc_html_e('Role Specialization', 'wc-carousel-grid-marketplace'); ?></label>
        <input type="text" 
               id="welp_specialization" 
               name="welp_specialization" 
               value="<?php echo esc_attr($specialization); ?>"
               class="regular-text"
               placeholder="<?php esc_attr_e('e.g., Senior support specialist', 'wc-carousel-grid-marketplace'); ?>">
        <span class="description"><?php esc_html_e('Optional subtitle shown below tier tag in pricing panel.', 'wc-carousel-grid-marketplace'); ?></span>
    </p>
</div>
