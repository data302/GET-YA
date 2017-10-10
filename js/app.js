'use strict';
var $, console;

// Convert time in decimal number (in seconds) to VTT time format
function convertNumberToTime (num) {
    var timeNum = num;
    var time = timeNum.toFixed(3);
    if (timeNum<10) {
        time = '00:00:0' + time;
    } else {
        time = '00:00:' + time;
    }
    return time;
}

// MediaElement.js
$('video').mediaelementplayer({
    videoWidth: '100%',
    videoHeight: '100%',
    enableAutosize: true,
    features: ['playpause', 'current', 'progress', 'duration', 'volume', 'tracks', 'fullscreen'],
    hideCaptionsButtonWhenEmpty: false
});

// Subtitles highlightning
$('video').on('timeupdate', function() {
    // Get current playing time from player
    var currentTime = this.getCurrentTime();
    currentTime = convertNumberToTime(currentTime);

    // Get start and end time of subtitles in html
    var captionTimes = $('.sub-time');

    // Compare currentTime with start and end time of captions, and add class .playing to caption (=> highligt)
    for (var i=0; i<captionTimes.length; i++) {
        var captionTime = captionTimes[i];
        var captionText = captionTime.nextElementSibling;
        captionTime = captionTime.textContent;
        captionTime = captionTime.trim();
        var captionStart = captionTime.slice(0, 12);
        var captionEnd = captionTime.slice(17);

        if (currentTime > captionStart && currentTime < captionEnd) {
            captionText.className = 'sub playing';
        } else {
            captionText.className = 'sub';
        }
    }
});




