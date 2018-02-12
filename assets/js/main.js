// This example uses jQuery so it creates the Dropzone, only when the DOM has
// loaded.

// Disabling autoDiscover, otherwise Dropzone will try to attach twice.
Dropzone.autoDiscover = false;
// or disable for specific dropzone:
// Dropzone.options.myDropzone = false;

$(function() {
	$('.devices li a').click( function(e) {
		$('#device-pick').val( $(this).attr('href') );
		$('.devices li a').removeClass('devices__item__link--active');
		$(this).addClass('devices__item__link--active');
		$('.device_selected').html( $(this).data('device-name') );
		if($('small', $(this)).length > 0) {
			$('.device_selected').append( '<small>' + $('small', $(this)).text() + '</small>');
		}
		$('.screen-width').html( $(this).data('screen-width')  );
		$('.screen-height').html( $(this).data('screen-height')  );
		e.preventDefault();
	});
	// Now that the DOM is fully loaded, create the dropzone, and setup the
	// event listeners
	var myDropzone = new Dropzone("#screen-uploader");

	myDropzone.on("success", function(file, response) {
		$('.generated').append('<div class="generated__item"><img src="' + response + '"></div>');
		$('.generated_count').html( $('.generated img').length );
	});

	myDropzone.on("sending", function(file, xhr, data) {
		var device = $('#device-pick').val();
		var orientation = $('input[name="orientation"]:checked').val();
    data.append("device", device);
		data.append("orientation", orientation);
	});

	$('.variations .variations__item').hover(function(e){
		var image = $(this).data('image');
		var $deviceLink = $(this).closest('.devices__item__link');
		var $device = $deviceLink.find('.devices__item__link__device');
		var backgroundUrl = 'assets/images/devices/placeholder/' + image + '.png';
		$deviceLink.find('small').html($(this).text());
		$device.css('background-image', 'url(' + backgroundUrl + ')');
	}, function(e){
		var $deviceLink = $(this).closest('.devices__item__link');
		var $device = $deviceLink.find('.devices__item__link__device');
		var $deviceLinkSmall = $deviceLink.find('small');
		var backgroundUrl = 'assets/images/devices/placeholder/' + $device.data('original-image') + '.png';
		$deviceLinkSmall.html($deviceLinkSmall.data('original-variation'));
		$device.css('background-image', 'url(' + backgroundUrl + ')');
	});

	$('.variations .variations__item').click(function(e){
		var image = $(this).data('image');
		var $deviceLink = $(this).closest('.devices__item__link');
		var $device = $deviceLink.find('.devices__item__link__device');
		var $deviceLinkSmall = $deviceLink.find('small');
		$deviceLink.attr('href', image);
		$device.data('original-image', image);
		$deviceLinkSmall.data('original-variation', $(this).text());
	});

	$('.devices .devices__item:first-child .devices__item__link').trigger('click');

	$('.orientation__item').click(function(e){
		$('.orientation__item').removeClass('orientation__item--active');
		$(this).addClass('orientation__item--active');
		if( $(this).find('input').val() == 'landscape' ) {
			$('.devices__item__link__device--rotate').addClass('devices__item__link__device--landscape' );
		} else {
			$('.devices__item__link__device--rotate').removeClass('devices__item__link__device--landscape' );
		}

	});

})
