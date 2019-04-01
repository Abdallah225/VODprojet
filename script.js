$(document).ready(function() {
      var totalItems = $('#carousel .item').length;
      var thumbs = 3;
      var currentThumbs = 0;
      var to = 0;
      var thumbActive = 1;
      
      function toggleThumbActive (i) {
        $('#carousel-thumbs .item>div').removeClass('active');
                $('#carousel-thumbs .item.active>div:nth-child(' + i +')').addClass('active');
      }
      
      $('#carousel').on('slide.bs.carousel', function(e) {
        //var active = $(e.target).find('.carousel-inner > .item.active');
        //var from = active.index();
        var from = $('#carousel .item.active').index()+1;
        var next = $(e.relatedTarget);
        to = next.index()+1;
        var nextThumbs = Math.ceil(to/thumbs) - 1;
        if (nextThumbs != currentThumbs) {
              $('#carousel-thumbs').carousel(nextThumbs);
              currentThumbs = nextThumbs;
        }
        thumbActive = +to-(currentThumbs*thumbs);
        //console.log(from + ' => ' + to + ' / ' + currentThumbs);
      });
      $('#carousel').on('slid.bs.carousel', function(e) {
        toggleThumbActive(thumbActive);
      });
      $('#carousel-thumbs').on('slid.bs.carousel', function(e) {
        toggleThumbActive(thumbActive);
      });
        $("#carousel").on("swiperight",function(){
            $('#carousel').carousel('prev');
          });
      $("#carousel").on("swipeleft",function(){
                $('#carousel').carousel('next');
          });
      $("#carousel-thumbs").on("swiperight",function(){
            $('#carousel-thumbs').carousel('prev');
          });
      $("#carousel-thumbs").on("swipeleft",function(){
                $('#carousel-thumbs').carousel('next');
          });
    });
    