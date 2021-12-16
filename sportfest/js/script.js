jQuery(document).ready(function($) {
    // Wrap YouTube embeds
    $('iframe[src*=youtu]').each(function() {
        var $curEl = $(this);

        if ( !$curEl.parents('.wpb_video_wrapper').length ) {
            $curEl.wrap('<div class="youtube-video" />');
        }
    })
});
