// var $d = $;
var $d = jQuery.noConflict();
$d(function(){
	var yt_int, yt_players={},
	    initYT = function() {
	        $d(".ytplayer").each(function() {
	            yt_players[this.id] = new YT.Player(this.id);
	        });
	    };
	$d.getScript("//www.youtube.com/player_api", function() {
	    yt_int = setInterval(function(){
	        if(typeof YT === "object"){
	            initYT();
	            clearInterval(yt_int);
	        }
	    },500);
	});
	$d('#play').on('click', function(){
		yt_players['player1'].playVideo();
	});
	$d('#pause').on('click', function(){
		yt_players['player1'].pauseVideo();
	});
});