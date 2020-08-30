var myNav = document.getElementById('navbar');
document.body.onscroll = function () 
{ 
    "use strict";
    if (document.body.scrollTop >= 100 || document.documentElement.scrollTop >= 100 )
	{
        myNav.classList.add("navbar-scrolled");
        myNav.classList.remove("navbar");
    } 
    else 
	{
        myNav.classList.add("navbar");
        myNav.classList.remove("navbar-scrolled");
    }
};