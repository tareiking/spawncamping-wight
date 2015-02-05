/*
 *  Background Theatre 1.0
 */

(function($){

	$(document).ready( function () {
		$( 'body' ).prepend( '<div style="height: 100%; width: 100%; position: fixed; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; -webkit-background-size: cover; background-image: none; background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;" id="background-theatre"></div>' );
		$("#background-theatre").vide('http://vagrant.local/content/plugins/background-theatre/video/small.mp4');
	});

})(jQuery);
