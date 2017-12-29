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