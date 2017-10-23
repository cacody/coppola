
// #user-posts-total
// #quicktabs-moderator_dashboard ul li a
jQuery(document).ready(function($) {

var data = '<div class="count-badge">' + $("div#user-posts-total").html() + '</div';
$('a[href$="quicktabs-moderator_dashboard2"]').append(data);

});
