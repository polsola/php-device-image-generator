Dropzone.autoDiscover=!1,$(function(){var e=new Dropzone("#screen-uploader");e.on("success",function(e,n){console.log(n),$(".generated").append('<div class="generated__item"><img src="'+n+'"></div>'),$(".generated_count").html($(".generated img").length)}),e.on("error",function(e,n){console.log(n)}),e.on("sending",function(e,n,o){var i=$("#device-pick").val(),c=$('input[name="orientation"]:checked').val();o.append("device",i),o.append("orientation",c)})});