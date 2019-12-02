//Here will be some basic things the fancybox plugin must do to specific images.
$('[data-fancybox]').fancybox({
		loop: true,//Here we will state that there will be a loop for the gallary
		//here we state all the buttons that will be active in the fancybox data
		buttons: [
    "zoom",
    "share",
    //"slideShow",
    //"fullScreen",
    //"download",
    "thumbs",
    "close"
  ],
  //Here i state the transition effect.
  transitionEffect: "circular",
	});
