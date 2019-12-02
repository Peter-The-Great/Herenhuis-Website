//Hier komen de basis dingen voor Fancybox
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
