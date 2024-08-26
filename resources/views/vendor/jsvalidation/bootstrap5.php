<script>
    jQuery(document).ready(function() {

        $("<?= $validator['selector']; ?>").each(function() {
            $(this).validate({
                errorElement: 'div',
                errorClass: 'invalid-feedback',

                errorPlacement: function(error, element) {
                    if (element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.appendTo(element.parents('.form-check').parent());
                    } else {
                        // Default
                        error.insertAfter(element);
                    }
                },
                highlight: function(element) {
                    if (element.type == 'radio' || element.type == 'checkbox') {
                        $(element.form).find('[name="' + element.name + '"]').each(function() {
                            $(this).addClass('is-invalid');
                        });
                    } else {
                        // Default
                        $(element).addClass('is-invalid');
                    }
                },

                <?php if (isset($validator['ignore']) && is_string($validator['ignore'])) : ?>

                    ignore: "<?= $validator['ignore']; ?>",
                <?php endif; ?>


                unhighlight: function(element) {
                    if (element.type == 'radio' || element.type == 'checkbox') {
                        $(element.form).find('[name="' + element.name + '"]').each(function() {
                            $(this).removeClass('is-invalid');
                        });
                    } else {
                        // Default
                        $(element).removeClass('is-invalid');
                    }
                },

                success: function(element) {
                    if (element.type == 'radio' || element.type == 'checkbox') {
                        $(element.form).find('[name="' + element.name + '"]').each(function() {
                            $(this).removeClass('is-invalid');
                        });
                    } else {
                        // Default
                        $(element).removeClass('is-invalid');
                    }
                },

                focusInvalid: true,
                <?php if (Config::get('jsvalidation.focus_on_error')) : ?>
                    invalidHandler: function(form, validator) {

                        if (!validator.numberOfInvalids())
                            return;

                        $('html, body').animate({
                            scrollTop: $(validator.errorList[0].element).offset().top - 200
                        }, <?= Config::get('jsvalidation.duration_animate') ?>);

                    },
                <?php endif; ?>

                rules: <?= json_encode($validator['rules']); ?>
            });
        });
    });
</script>