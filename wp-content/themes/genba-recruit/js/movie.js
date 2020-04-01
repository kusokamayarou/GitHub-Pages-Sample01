var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
    ytPlayer = new YT.Player(
        'movie',
        {
            width: 1000,
            height: 563,
            videoId: '_n7kQGcKHLg',
            playerVars: {
              autohide: 1,
              loop: 1,
              rel: 0,
              modestbranding: 1,
              showinfo: 0,
            },
            events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
            }
        }
    );
}
function onPlayerReady(event) {
event.target.playVideo();
event.target.mute();
}
function onPlayerStateChange(event) {
}
