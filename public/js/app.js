function Carousel(){var e={images:document.querySelectorAll(".carousel>img"),prev:document.getElementsByClassName("prev")[0],next:document.getElementsByClassName("next")[0],nav:document.querySelectorAll(".carousel nav ul li")},n={minImageIndex:0,maxImageIndex:e.images.length-1,activeImageIndex:1,autoSlide:0},t={init:function(){this.buttonListeners(),this.navListeners()},buttonListeners:function(){e.prev.addEventListener("click",function(e){e.preventDefault(),i.prevImage()}),e.next.addEventListener("click",function(e){e.preventDefault(),i.nextImage()})},navListeners:function(){for(var n=0,t=e.nav.length;n<t;++n)!function(n){e.nav[n].addEventListener("click",function(e){e.preventDefault(),i.makeImageActive(n)})}(n)}},a={setup:function(){n.autoSlide=setInterval(function(){i.nextImage()},5e3)},clearAndReset:function(){clearInterval(n.autoSlide),this.setup()}},i={nextImage:function(){n.activeImageIndex<n.maxImageIndex?++n.activeImageIndex:n.activeImageIndex===n.maxImageIndex?n.activeImageIndex=n.minImageIndex:console.log("something went wrong with the carousel sliders next function."),this.makeImageActive(n.activeImageIndex)},prevImage:function(){n.activeImageIndex>n.minImageIndex?--n.activeImageIndex:n.activeImageIndex===n.minImageIndex?n.activeImageIndex=n.maxImageIndex:console.log("something went wrong with the carousel sliders previous function."),this.makeImageActive(n.activeImageIndex)},makeImageActive:function(n){a.clearAndReset();for(var t=0,i=e.images.length;t<i;++t)e.images[t].classList.contains("shown")&&e.images[t].removeAttribute("class");for(var s=0,m=e.nav.length;s<m;++s)e.nav[s].classList.contains("active")&&e.nav[s].removeAttribute("class");e.nav[n].className="active",e.images[n].className="shown"}};i.makeImageActive(n.activeImageIndex),t.init(),a.setup()}document.getElementsByClassName("carousel").length>0&&new Carousel;