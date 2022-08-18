(function($) {
    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            email: {
                email: true
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        stepsOrientation: "vertical",
        titleTemplate: '<div class="title"><span class="step-number">#index#</span><span class="step-text">#title#</span></div>',
        labels: {
            previous: 'Previous',
            next: 'Next',
            finish: 'Finish',
            current: ''
        },
        onStepChanging: function(event, currentIndex, newIndex) {
            if (currentIndex === 0) {
                form.parent().parent().parent().append('<div class="footer footer-' + currentIndex + '"></div>');
            }
            if (currentIndex === 1) {
                form.parent().parent().parent().find('.footer').removeClass('footer-0').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 2) {
                form.parent().parent().parent().find('.footer').removeClass('footer-1').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 3) {
                form.parent().parent().parent().find('.footer').removeClass('footer-2').addClass('footer-' + currentIndex + '');
            }
            if (currentIndex === 4) {
                form.parent().parent().parent().append('<div class="footer" style="height:752px;"></div>');
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert('Submited');
        },
        onStepChanged: function(event, currentIndex, priorIndex) {

            return true;
        }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

    $.dobPicker({
        daySelector: '#birth_date',
        monthSelector: '#birth_month',
        yearSelector: '#birth_year',
        dayDefault: '',
        monthDefault: '',
        yearDefault: '',
        minimumAge: 0,
        maximumAge: 120
    });
    var marginSlider = document.getElementById('slider-margin');
    if (marginSlider != undefined) {
        noUiSlider.create(marginSlider, {
            start: [1100],
            step: 100,
            connect: [true, false],
            tooltips: [true],
            range: {
                'min': 100,
                'max': 2000
            },
            pips: {
                mode: 'values',
                values: [100, 2000],
                density: 4
            },
            format: wNumb({
                decimals: 0,
                thousand: '',
                prefix: '$ ',
            })
        });
        var marginMin = document.getElementById('value-lower'),
            marginMax = document.getElementById('value-upper');

        marginSlider.noUiSlider.on('update', function(values, handle) {
            if (handle) {
                marginMax.innerHTML = values[handle];
            } else {
                marginMin.innerHTML = values[handle];
            }
        });
    }
})(jQuery);

$("select[name='state']").change(function() {

    var stateID = $(this).val();

    if (stateID) {
        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {
                'id': stateID,
                'table': 'city'
            },
            success: function(data) {
                $('select[name="city"]').empty();
                $('select[name="city"]').append('<option value=""disabled selected>Select City</option>');
                $.each(data, function(key, value) {

                    $('select[name="city"]').append('<option value="' + key + '">' + value + '</option>');
                });
            }
        });

    } else {
        $('select[name="city"]').empty();
    }

});

$("select[name='city']").change(function() {

    var cityId = $(this).val();

    if (cityId) {
        $.ajax({
            url: "ajaxpro.php",
            dataType: 'Json',
            data: {
                'id': cityId,
                'table': 'branch'
            },
            success: function(data) {
                $('select[name="branch"]').empty();
                $('select[name="branch"]').append('<option value=""disabled selected>Select Branch</option>');

                $.each(data, function(key, value) {
                    $('select[name="branch"]').append('<option value="' + key + '">' + value + '</option>');
                });
            }
        });

    } else {
        $('select[name="branch"]').empty();
    }

});