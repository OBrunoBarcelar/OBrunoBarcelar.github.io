<figure class="wp-block-video presto-block-video <?php echo esc_attr($data['class']); ?> presto-provider-<?php echo sanitize_html_class($data['provider']); ?>" style="<?php echo esc_attr($data['styles']); ?>">
    <presto-player <?php echo is_rtl() ? 'direction="rtl"' : ""; ?> id="presto-player-<?php echo (int) $presto_player_instance; ?>" src="<?php echo esc_attr($data['src']); ?>" media-title="<?php echo esc_attr($data['title']); ?>" css="<?php echo sanitize_text_field($data['css']); ?>" class="<?php echo esc_attr($data['playerClass']); ?>" skin="<?php echo esc_attr($data['skin']); ?>" icon-url="<?php echo esc_url(PRESTO_PLAYER_PLUGIN_URL . 'img/sprite.svg'); ?>" preload="<?php echo esc_attr($data['preload']); ?>" poster="<?php echo esc_attr($data['poster']); ?>" <?php echo $data['playsInline'] ? 'playsinline' : ''; ?> <?php echo $data['autoplay'] ? 'autoplay' : ''; ?> <?php do_action('presto_player/templates/player_tag', $data); ?>>
        <?php if (!empty($data['provider'])) include 'fallback.php'; ?>
    </presto-player>
</figure>