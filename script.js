$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1000, function(){
          window.location.hash = hash;
        });
      } 
    });

    $("button-2").click(function() {
        var $this = $(this);
        if($this.hasClass("more2")){
        $( ".content-2" ).slideToggle('500','linear' );
                $this.toggleClass("open");
                if ($this.hasClass("open")) {
                    $this.html("Hide");
                } else {
                    $this.html("Show more");
                }
            }
    });

    $("button-1").click(function() {
        var $this = $(this);
        if($this.hasClass("more1")){
        $( ".content-1" ).slideToggle('500','linear' );
                $this.toggleClass("open-1");
                if ($this.hasClass("open-1")) {
                    $this.html("Hide");
                } else {
                    $this.html("Show more");
                }
            }
    });
});
