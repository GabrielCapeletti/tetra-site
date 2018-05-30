$(function () {
        resizeContentMargin();
    
        window.addEventListener("scroll", function(event){            
            var top = this.pageYOffset;

            var layers = document.getElementsByClassName("parallax");
            var layer, speed, yPos;
            for (var i = 0; i < layers.length; i++) {
                layer = layers[i];
                speed = layer.getAttribute('data-speed');
                var yPos = -(top * speed / 100);
                layer.setAttribute('style', 'transform: translate3d(-50%, ' + yPos + 'px, 0px)');

            }
        });
    
        function resizeContentMargin(){
            var height = $('#parallax-header').height();    
            $('#content').css("margin-top",height*1.14);
        }

        $(window).resize(resizeContentMargin);
});