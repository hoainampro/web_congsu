function ld_add_image(obj) {
    var parent = jQuery(obj).parents('.field_row_gallery');
    var inputField = jQuery(parent).find("input.meta_image_url");
    var mediaUploader;
    if (mediaUploader) {
        mediaUploader.open();
        return;
    }

    mediaUploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    mediaUploader.on('select', function() {
        attachment = mediaUploader.state().get('selection').first().toJSON();
        inputField.val(attachment.url);
        jQuery(parent)
            .find("div.image_wrap")
            .html('<img src="' + attachment.url + '" height="100" width="100" />');
    });
    
    mediaUploader.open();
    return false;
}

function ld_remove_field(obj) {
    var parent = jQuery(obj).parent().parent();
    parent.remove();
}

jQuery(document).ready(function($) {
    $('.ld_add_field').click(function(event) {
        $('.field_wrap_galery').append($('.master_field_galery').html());
        return false;
    });
    $('#landing-page-fields').removeClass('postbox ');
});
