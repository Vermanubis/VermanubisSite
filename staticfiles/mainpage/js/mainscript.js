	var myNav = document.getElementById('navbar');
	var myNavWrap = document.getElementById('navbarwrapper');
	var mySocialWrap = document.getElementById('socialwrapper');
	
	window.onscroll = function () 
	{	 
		"use strict";
		if (document.documentElement.scrollTop >= 100 )
		{
			myNav.classList.add("navbar-scrolled");
			myNav.classList.remove("navbar");
			myNavWrap.classList.add("navbarwrapper-scrolled");
			myNavWrap.classList.remove("navbarwrapper");
		} 
		else 
		{
			myNav.classList.add("navbar");
			myNav.classList.remove("navbar-scrolled");
			myNavWrap.classList.add("navbarwrapper");
			myNavWrap.classList.remove("navbarwrapper-scrolled");
			
		}
		/*if (scrollPos >= document.getElementById("parallax3").offsetTop
			&& scrollPos <= document.getElementById("parallax4").offsetTop)
		{
			document.getElementById("#musicbox").style.color = "red";
		}
		else
		{
			document.getElementById("#musicbox").style.color = "#f2f2f2";
		}
		*/
	};
	
	var acc = document.getElementsByClassName("accordion");
	var i;
	var activePanel = null;

	for (i = 0; i < acc.length; i++) 
	{
	
	  acc[i].onclick = function() 
	  {
		/*if(activePanel == this)
		{
			toggleItem(activePanel);
			activePanel = null;
			return;
		}
		if(activePanel != null)
		{
			toggleItem(activePanel);
		}*/

		toggleItem(this);
		//activePanel = this;  
	  }
	}
	  	  
	function toggleItem(item)
	{
		item.classList.toggle("active");

	/* Toggle between hiding and showing the active panel */
		var panel = item.nextElementSibling;

		if (panel.style.maxHeight) //panel is open, now close it
		{
			panel.style.maxHeight = null;
			document.getElementById("parallax5").style.minHeight = 
				document.getElementById("parallax5").offsetHeight - panel.scrollHeight + "px";
		} 
		else //panel is closed, now open it
		{
			panel.style.maxHeight = panel.scrollHeight + "px";
			document.getElementById("parallax5").style.minHeight = 
				document.getElementById("parallax5").offsetHeight + panel.scrollHeight + "px";
		} 
	};
	
	async function logoReturn()
	{
		var notice = document.getElementById("logo");
		var sublogo = document.getElementById("sublogo");
		if(logo.style.display == "none")
		{
			let promise = new Promise((resolve, reject) => {
			setTimeout(function(){
				sublogo.style.opacity = 0;
				resolve("done");}, 5000)
			});
			
			let result = await promise;
			var sublogotext = document.getElementById("sublogotext");
			//sublogotext.innerHTML = "Game Composer";
			//notice.style.display = "block";
			//sublogo.style.opacity = 1;
			//notice.style.opacity = 1;
			
			
			//var logo = document.styleSheets.
			//document.getElementById("first").appendChild(document.getElementById("logo"));	
		}
	};