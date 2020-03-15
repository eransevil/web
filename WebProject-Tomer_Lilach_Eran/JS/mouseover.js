

//JQUERY - when you move over the first picture (לימור שחר ) in the index page, it`s change to another picture

  (function($) {
        $("#limor")
          .mouseover(function() {
            this.src = "Images/black-and-gray-microphone-164829.jpg";
          })
          .mouseout(function() {
            this.src = "Images/Profile_Images/lecturer1.jpg";
          });
      })(jQuery);
