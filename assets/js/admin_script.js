jQuery(document).ready(function($){

    var experience_img_one;
    $(document).on('click', '#experience-img-one', function(event){
        var $button = $(this);

        $fieldparent = $button.closest('tr');
        // If the media frame already exists, reopen it.
        if ( experience_img_one ) {
            experience_img_one.open();
            return;
        }
        // Create the media frame.
        experience_img_one = wp.media.frames.experience_img_one = wp.media({
            title: 'Select or Upload Image',
            button: {
                text: 'Select'
            },
            library: {
                type: [ 'image' ]
            },
            multiple: false
        });
        // When an image is selected, run a callback.
        experience_img_one.on( 'select', function() {
            var attachment = experience_img_one.state().get('selection').first().toJSON();

            $fieldparent.find('[name="experience-img-one"]').val(attachment.url);

            experience_img_one.close();

        });

        // Finally, open the modal.
        experience_img_one.open();
    });

    var experience_img_two;
    $(document).on('click', '#experience-img-two', function(event){
        var $button = $(this);

        $fieldparent = $button.closest('tr');
        // If the media frame already exists, reopen it.
        if ( experience_img_two ) {
            experience_img_two.open();
            return;
        }
        // Create the media frame.
        experience_img_two = wp.media.frames.experience_img_two = wp.media({
            title: 'Select or Upload Image',
            button: {
                text: 'Select'
            },
            library: {
                type: [ 'image' ]
            },
            multiple: false
        });
        // When an image is selected, run a callback.
        experience_img_two.on( 'select', function() {
            var attachment = experience_img_two.state().get('selection').first().toJSON();

            $fieldparent.find('[name="experience-img-two"]').val(attachment.url);

            experience_img_two.close();

        });

        // Finally, open the modal.
        experience_img_two.open();
    });

});
