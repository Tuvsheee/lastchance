 // Update the progress bar based on scroll position
 window.addEventListener('scroll', function() {
    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    var scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
    var scrollPercent = (scrollTop / (scrollHeight - window.innerHeight)) * 100;
    document.getElementById('progressIndicator').style.width = scrollPercent + '%';
});