$(function(){$(".devices li a").click(function(i){$("#device-pick").val($(this).attr("href")),$(".devices li a").removeClass("devices__item__link--active"),$(this).addClass("devices__item__link--active"),$(".device_selected").html($(this).data("device-name")),0<$("small",$(this)).length&&$(".device_selected").append("<small>"+$("small",$(this)).text()+"</small>"),$(".screen-width").html($(this).data("screen-width")),$(".screen-height").html($(this).data("screen-height")),i.preventDefault()}),$(".variations .variations__item").hover(function(i){var e=$(this).data("image"),t=$(this).data("variation"),a=$(this).closest(".devices__item__link"),_=a.find(".devices__item__link__device"),s="assets/images/devices/placeholder/"+e+".png";a.find("small").html($(this).text()),a.find(".devices__item__link__placeholder").addClass("devices__item__link__placeholder--variation"+t),_.css("background-image","url("+s+")")},function(i){var e=$(this).data("variation"),t=$(this).closest(".devices__item__link"),a=t.find(".devices__item__link__device"),_=t.find("small"),s="assets/images/devices/placeholder/"+a.data("original-image")+".png";t.find(".devices__item__link__placeholder").removeClass("devices__item__link__placeholder--variation"+e),_.html(_.data("original-variation")),a.css("background-image","url("+s+")")}),$(".variations .variations__item").click(function(i){var e=$(this).data("image"),t=$(this).data("variation"),a=$(this).closest(".devices__item__link"),_=a.find(".devices__item__link__device"),s=a.find("small");a.attr("href",e),_.data("original-image",e),s.data("original-variation",$(this).text()),a.find(".devices__item__link__placeholder").addClass("devices__item__link__placeholder--variation"+t)}),$(".app__nav__section:first-child .devices .devices__item:first-child .devices__item__link").trigger("click"),$(".orientation__item").click(function(i){$(".orientation__item").removeClass("orientation__item--active"),$(this).addClass("orientation__item--active"),"landscape"==$(this).find("input").val()?$(".devices__item__link__device--rotate").addClass("devices__item__link__device--landscape"):$(".devices__item__link__device--rotate").removeClass("devices__item__link__device--landscape")})});