<footer class="footer">

    <a href="#top" class="back-to-top"></a>


    <div class="share-actions-container closed">
        <div class="share-action-control">
            <img class="share-icon" src="<?= get_template_directory_uri() ?>/img/share.svg">
            Share
            <img class="share-control-button" src="<?= get_template_directory_uri() ?>/img/cross.svg">
        </div>

        <div class="share-actions">
            <?php global $wp;
            $url = urlencode(home_url($wp->request));
            $title = wp_title('', false, 'right') === '' ? get_bloginfo() : get_bloginfo() . ' | ' . wp_title('', false, 'right');
            ?>
            <div class="vc_column_container left-column">
                <div class="share-action-item">
                    <a target="_blank"
                        href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $url; ?>&title=Energiekolleg%20an%20der%20HTWK%20zu%20Leipzig&summary=&source=">
                        <img class="social-media-icon" src="<?= get_template_directory_uri() ?>/img/linkedin.svg">
                        <span class="social-media-text">Linkedin</span>
                    </a>
                </div>
                <div class="share-action-item">
                    <a target="_blank" href="https://twitter.com/intent/tweet?url=<?= $url; ?>">
                        <img class="social-media-icon" src="<?= get_template_directory_uri() ?>/img/twitter.svg">
                        <span class="social-media-text">Twitter</span>
                    </a>
                </div>
            </div>
            <div class="vc_column_container right-column">
                <div class="share-action-item">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u= <?= $url; ?>">
                        <img class=" social-media-icon" src="<?= get_template_directory_uri() ?>/img/facebook.svg">
                        <span class="social-media-text">
                            Facebook
                        </span>
                    </a>
                </div>
                <div class="share-action-item">
                    <a href='mailto:?subject=<?= $title ?>&body=<?= $url ?>'>
                        <img class="social-media-icon" src="<?= get_template_directory_uri() ?>/img/email.svg">
                        <span class="social-media-text">E-Mail</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav">
        <?php footer_nav(); ?>
    </nav>
    <div class="social-media-wrapper">
        <a href="https://www.linkedin.com/showcase/vng-stiftung/">
            <img class="social-media-icon" src="<?php echo get_template_directory_uri() ?>/img/linkedin.svg">
        </a>
        <a href="https://twitter.com/search?q=%23VNG%20%23Stiftung&src=typed_query">
            <img class="social-media-icon" src="<?php echo get_template_directory_uri() ?>/img/twitter.svg">
        </a>
    </div>
    <div class="clearfix"></div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>