$(function(){

// The height of the content block when it's not expanded
var adjustheight = 10;
// The "more" link text
var moreText = "+ More";
// The "less" link text
var lessText = "- Less";

// Sets the .answer div to the specified height and hides any content that overflows
$(".questionandanswer p.answer").css('height', adjustheight).css('overflow', 'hidden');

// The section added to the bottom of the "questionandanswer" div
$(".questionandanswer").append('<p class="continued">[&hellip;]</p><a href="#" class="adjust"></a>');

$("a.adjust").text(moreText);

$(".adjust").toggle(function() {
		$(this).parents("div:first").find("p.answer").css('height', 'auto').css('overflow', 'visible');
		// Hide the [...] when expanded
		$(this).parents("div:first").find("p.continued").css('display', 'none');
		$(this).text(lessText);
	}, function() {
		$(this).parents("div:first").find("p.answer").css('height', adjustheight).css('overflow', 'hidden');
		$(this).parents("div:first").find("p.continued").css('display', 'block');
		$(this).text(moreText);
	});
});