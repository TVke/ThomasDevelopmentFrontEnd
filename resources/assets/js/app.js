
function Carousel() {
    var DOMElements = {
        images: document.querySelectorAll('.carousel>img'),
        prev: document.getElementsByClassName("prev")[0],
        next: document.getElementsByClassName("next")[0],
        nav: document.querySelectorAll(".carousel nav ul li"),
    };
    var model = {
        minImageIndex: 0,
        maxImageIndex: DOMElements.images.length - 1,
        activeImageIndex: 1,
        autoSlide: 0,
    };
    var ListenerController = {
        init: function () {
            this.buttonListeners();
            this.navListeners();
        },
        buttonListeners: function () {
            DOMElements.prev.addEventListener("click",function (e) {
                e.preventDefault();
                OrderController.prevImage();
            });
            DOMElements.next.addEventListener("click",function (e) {
                e.preventDefault();
                OrderController.nextImage();
            });
        },
        navListeners: function () {
            for(var i = 0,ilen = DOMElements.nav.length;i<ilen;++i){
                !function (i) {
                    DOMElements.nav[i].addEventListener("click",function (e) {
                        e.preventDefault();
                        OrderController.makeImageActive(i);
                    });
                }(i);
            }
        },
    };
    var AutomationController = {
        setup: function () {
            model.autoSlide = setInterval(function () {
                OrderController.nextImage();
            },5000);
        },
        clearAndReset: function () {
            clearInterval(model.autoSlide);
            this.setup();
        },
    };
    var OrderController = {
        nextImage: function () {
            if(model.activeImageIndex < model.maxImageIndex){
                ++model.activeImageIndex;
            }else if(model.activeImageIndex === model.maxImageIndex){
                model.activeImageIndex = model.minImageIndex;
            }else{
                console.log("something went wrong with the carousel sliders next function.");
            }
            this.makeImageActive(model.activeImageIndex);
        },
        prevImage: function () {
            if(model.activeImageIndex > model.minImageIndex){
                --model.activeImageIndex;
            }else if(model.activeImageIndex === model.minImageIndex){
                model.activeImageIndex = model.maxImageIndex;
            }else{
                console.log("something went wrong with the carousel sliders previous function.");
            }
            this.makeImageActive(model.activeImageIndex);
        },
        makeImageActive: function (imageIndex) {
            AutomationController.clearAndReset();
            for(var i = 0,ilen = DOMElements.images.length;i<ilen;++i){
                if(DOMElements.images[i].classList.contains("shown")){
                    DOMElements.images[i].removeAttribute("class");
                }
            }
            for(var j = 0,jlen = DOMElements.nav.length;j<jlen;++j){
                if(DOMElements.nav[j].classList.contains("active")){
                    DOMElements.nav[j].removeAttribute("class");
                }
            }
            DOMElements.nav[imageIndex].className = "active";
            DOMElements.images[imageIndex].className = "shown";
        },
    };
    // var Creator = {
    //     makeNav: function () {
    //
    //     },
    // };

    !function initial() {
        OrderController.makeImageActive(model.activeImageIndex);
        ListenerController.init();
        AutomationController.setup();
    }();
}

!function () {
    new Carousel();
}();