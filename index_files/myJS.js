 function  textScript() {
       
        $('.spText').each(function(i, obj) {
            var strong = $(this).find('strong');
            var em = $(this).find('em');
            var ev = $(this).find('var');
            var text = $(this).clone().children().remove().end().text(),
            //var text = $(this).text(),
            textArr = text.split('');
            $(this).innerHTML=""; text= '';

            $.each(textArr, function(i, v){
            if(v == ' '){text +='<span>&nbsp;</span>';}
            text +='<span>'+v+'</span>';
            })
            if(!$.isEmptyObject(strong))
                $(this).html(strong);
            if(!$.isEmptyObject(em))
                $(this).append(em);
            if(!$.isEmptyObject(ev))
                $(this).append(ev);
            $(this).append(text) ;
        });
}

$(document).ready(function(){
    initAnchors();
    initStars();
})
function initAnchors() {
    new SmoothScroll({
        anchorLinks: '.nav > li > a',
        extraOffset: function() {
            var totalHeight = 0;
            jQuery('.navbar-fixed-top').each(function(){
                totalHeight += jQuery(this).outerHeight();
            });
            return totalHeight;
        },
        activeClasses: 'link'
    });
}
function initStars() {
    $('html').jstars({
        image_path: 'http://www.boostshore.com/index_files/images',
        style: 'yellow',
        frequency: 19,
        delay: 600
    });
}