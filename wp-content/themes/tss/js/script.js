
var curslide = 1;
var slideDir = 'down';

jQuery(document).ready(function($){

	$('.nav-box').hover(function(){
		if($(this).hasClass('active-nav'))
			return;
		$(this).find(".nav-slide").stop(true,false).animate({marginTop:59},600,'easeInOutCubic');
	},function(){
		if($(this).hasClass('active-nav'))
			return;
		$(this).find(".nav-slide").animate({marginTop:0},600,'easeInOutCubic');
	});
	
	$(".follow-us").hover(function(){
		$(this).find('.offh').hide();
		$(this).find('.onh').show();
	},function(){
		$(this).find('.onh').hide();
		$(this).find('.offh').show();
	});
	
	// Slider on the about page
	if($("#slide-box").length > 0){
        $("#slide-box").cycle({
            fx: 'scrollDown' ,
            speedIn : 800,
            speedOut: 1200,
            timeout: 0,
            sync:true,
			easing: 'easeInOutCubic',
            pagerAnchorBuilder: function(idx, slide) { 
                // return selector string for existing anchor
                return '#slide-navs span:eq(' + idx + ') a'; 
            } 
        });
		
		$("#slide-navs > span > a").click(function(){
			$("#slide-navs > span > .activeSlide").removeClass('activeSlide');
			$(this).addClass('activeSlide');
			if(slideDir == 'down')
				slideBoxUp($(this).html());
			if(slideDir == 'up')
				slideBoxDown($(this).html());
			
		});
		
		
		$("#next-button").click(function(){
			var next = (curslide < 4) ? curslide+1 : 1;
			slideDir = 'down';
			$("#slide-navs").find(".s"+next).trigger('click');
		});
		$("#prev-button").click(function(){
			var prev = (curslide == 1) ? 4 : curslide-1;
			var sp = (prev == 0) ? 3 : prev-1;
			if(sp == 3) $("#slide-box").cycle(0,'scrollUp');
			else $("#slide-box").cycle(prev,'scrollUp');
			slideDir = 'up';
			$("#slide-navs").find(".s"+prev).trigger('click');
			
		});	
		
    }
	
	$(".lrg-arrow").click(function(){
		var c = "."+$(this).attr('rel');
		var old = "."+$("#oc-head").find(".active").attr('rel');
		if(old == c) return;
		
		var h = $("#all-boxes").height();
		$("#all-boxes").height(h);
		
		$("#all-boxes").find(old).fadeOut(function(){
			$("#all-boxes").find(c).fadeIn();
			var th = $("#all-boxes").find(c).height();
			$("#all-boxes").stop(true,false).animate({height:th});
			if($(".qac").height() != 0){
				$(".lc").height($(".qac").height()-69);
			}
			//console.log($(".qac").height());
			//console.log($(".lc").height());
		});
		
		
		$("#oc-head").find(".active").removeClass('active');
		$(this).addClass('active');
		
	});
	
	
	$("#submit-button").click(function() {
		var name = $("#e-name").val();
		var email = $("#e-email").val();
		var message = $("#e-message").val();
		var daycon = $("#e-daycon").val();
		var cell = $("#e-cell").val();
		var address = $("#e-address").val();
		var city = $("#e-city").val();
		var state = $("#e-state").val();
		var how = $("#e-how").val();
		var zip = $("#e-zip").val();
		
		// validate form
		if ($.trim(name).length == 0 || $.trim(name).length == 0) {
			alert("Please enter your name.");
			$("#e-name").focus();
			return false;
		}
		if ($.trim(email).length == 0) {
			alert("Please enter your email address.");
			$("#e-email").focus();
			return false;
		}
		if ($.trim(message).length == 0) {
			alert("Please enter the message you wish to send.");
			$("#e-message").focus();
			return false;
		}
		var fr;
		
		if ($.trim(message).length != 0) {
			fr = '&h-fr=true';
		}
		
		// display loading indicator
		$("#rc-info").html('<div class="lci-set"><label>Processing information&hellip;</label></div>');
		//$("#contactForm").append("<p class='pleaseWait'>Please wait. <img src='" + themeDirectory + "/images/ajax-loader.gif' /></p>");
		var dataString = 'post-form=true&e-name=' + encodeURIComponent(name) +
						'&e-email=' + encodeURIComponent(email) +
						"&e-message=" + encodeURIComponent(message) +
						"&e-daycon=" + encodeURIComponent(daycon) +
						"&e-cell=" + encodeURIComponent(cell) + 
						"&e-address=" + encodeURIComponent(address) +
						"&e-city=" + encodeURIComponent(city) +
						"&e-state=" + encodeURIComponent(state) +
						"&e-zip=" + encodeURIComponent(zip) +
						"&e-how=" + encodeURIComponent(how) +
						fr;
				
		$.ajax({
			type: "POST",
			url: "/wp-content/themes/tss/mailer/send.php",
			data: dataString,
			success: function(data) {
				if (data === 'SUCCESS') {
					$('#rc-info').html("<div class='resultMessage'><p><b>Contact Form Submitted!</b></p><p>Thanks. We will be in touch soon.</p></div>");
					$('#rc-info').fadeIn();
				} else {
					if ($(".resultMessage").length == 0) {
						$('#rc-info').prepend("<div class='rci-set'><p><span class='red-text'>Your message could not be sent.</span></p><p>Please email us directly at <a href='mailto:info@thesandwichspot.com'>info@thesandwichspot.com</a>.</p></div>");
					}
					//$(".pleaseWait").remove();
					$("#rc-info").show();
				}
			}
		});
		return false;
	});
	
	
	if($(".gallery").length > 0){
		var shift = 873;
		$(".tb-thumb").click(function(){
			if($(this).hasClass('active')) return;
			
			$("#thumb-inner").find(".active").removeClass('active');
			$(this).addClass('active');
			
			$("#display-photo").find('img').attr('src',$(this).attr('frimg'));
			$("#display-photo").find('a').attr('href',$(this).attr('frlink'));
			$("#photo-caption").html($(this).find('img').attr('alt'));
			
			checkNPButton($(this));
			
		});
		
		$("#pl-button").click(function(){
			if($(this).hasClass('disabled')) return;
			var n = $("#thumb-inner").find('.active').prev();
			n.trigger('click');
			checkNPButton(n);
		
		});
		
		$("#pr-button").click(function(){
			if($(this).hasClass('disabled')) return;
			var n = $("#thumb-inner").find('.active').next();
			n.trigger('click');
			checkNPButton(n);
		
		});
		
		$("#right-button").click(function(){
			var ml = parseInt($("#thumb-inner").css('marginLeft'));
			if(Math.abs(ml-shift) > $("#thumb-inner").width()){
				//dont shift
				return;
			}
			$("#thumb-inner").animate({marginLeft:ml-shift},function(){checkThumbSlide(shift);});
			
		});
		
		$("#left-button").click(function(){
			var ml = parseInt($("#thumb-inner").css('marginLeft'));
			if(ml+shift > 0){
				return;
			}
			$("#thumb-inner").animate({marginLeft:ml+shift},function(){checkThumbSlide(shift);});
		});
		
		checkThumbSlide(shift);
		checkNPButton($(".tb-thumb:first"));
		$(".tb-thumb:first").trigger('click');
	
	}

});

function checkThumbSlide(shift){
	var ml = parseInt($("#thumb-inner").css('marginLeft'));
	if(Math.abs(ml-shift) > $("#thumb-inner").width()){
		$("#right-button").addClass('disable');
	}else{
		$("#right-button").removeClass('disable');
	}
	if(ml+shift > 0){
		$("#left-button").addClass('disable');
	}else{
		$("#left-button").removeClass('disable');
	}
	
}

function checkNPButton(cur){
	var f = $("#thumb-inner").children().first();
	var l = $("#thumb-inner").children().last();
	
	if(cur.attr('rel') == f.attr('rel')){
		$("#pl-button").addClass('disabled');
	}else{
		$("#pl-button").removeClass('disabled');
	}
	if(cur.attr('rel') == l.attr('rel')){
		$("#pr-button").addClass('disabled');
	}else{
		$("#pr-button").removeClass('disabled');
	}
	
}


function slideBoxUp(num){
	var sn = ".s"+num;
	var sc = ".s"+curslide;
	
	$("#about-text-box").find(sn).prependTo("#about-show-box");
	$("#about-text-box").find(sn).css({marginTop:-210});
	$("#about-text-box").find(sn).animate({marginTop:0},800,'easeInOutCubic',function(){
		$("#about-text-box").find(sc).appendTo("#about-hide-box");
		//$("#about-text-box").find(sc).css({marginBottom:0});
		curslide = Number(num);
	});
}

function slideBoxDown(num){
	var sn = ".s"+num;
	var sc = ".s"+curslide;
	
	$("#about-text-box").find(sn).prependTo("#about-show-box");
	$("#about-text-box").find(sn).css({marginTop:210});
	$("#about-text-box").find(sn).animate({marginTop:0},800,'easeInOutCubic',function(){
		$("#about-text-box").find(sc).appendTo("#about-hide-box");
		//$("#about-text-box").find(sc).css({marginBottom:0});
		curslide = Number(num);
	});
}