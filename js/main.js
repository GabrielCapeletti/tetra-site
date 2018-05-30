$(function () {
        var parallaxMouseStrenght = 50;

        var offsetX = 0;        
        var offsetY = 0;
        var top = 0;
        resizeContentMargin();
    
        $(window).scroll(function(event){            
            top = this.pageYOffset;           
            applyParallax();
        });
        
    
        function resizeContentMargin(){
            var height = $('[data-parallax]').height();    
            $('[data-content]').css("margin-top",height*1.14);
        }

        function applyParallax(){
            var layers = $('.parallax');
            var layer, speed, yPos;
            for (var i = 0; i < layers.length; i++) {
                layer = layers[i];
                speed = $(layer).attr('data-speed');
                var yPos = -((top+offsetY) * speed / 100);
                var xPos = -(offsetX * speed/100);
                $(layer).css('transform', 'translate3d(calc(-50% - '+xPos+'px), ' + yPos + 'px, 0px)');
            }
        }

        function onMouseMove(event) {
            var winWindth = $(window).width();
            var winHeight = $(window).height();

            offsetX = parallaxMouseStrenght* event.pageX/winWindth;
            //offsetY = parallaxMouseStrenght* event.pageY/winHeight;

            applyParallax();
        }

        $(window).resize(resizeContentMargin);
        $(window).mousemove(onMouseMove);
});