
jQuery(function() {

    $('#downloads .free-download, #downloads .buy, #downloads .buy-all, #downloads .open-sources').css('opacity', 0.8).hover(
        function(){ $(this).animate({'opacity': 1}, {duration: 400}); },
        function(){ $(this).stop().animate({'opacity': 0.8}, {duration: 400}); }
    );

    $('#links-list').hide();

    $('#links-ctrl').click(function(){
        this.opened = !(this.opened);
        if ($.browser.msie) $('#old-links ul').css('visibility', 'hidden');
        if (!this.opened)
            $('#links-list').css('overflow', 'hidden').slideUp(function(){ $(this).css('overflow', 'visible'); });
        else{
            $('#links-list').slideDown(function(){ if ($.browser.msie) $('#old-links ul').css('visibility', 'visible'); });
            $('html').animate({scrollTop: $('#copyright').offset().top}, 400);
        }
    });

    $('#menu .menu a').click(function(){ return false; });
    
    if ($('#monitor').length){
        var opt = { 
            data : [[]],
            legend : [],
            axis_labels : [' '],
            colors : ['333333'],
            type : 'bhg',
            size : '600x350',
            bg : '000000',
            bar_width : 25
        };
        var actions = [];
        for (var i = 0; i < monitor.length; i++){
            var is_exists = false;
            for (var j = 0; j < actions.length; j++){
                if (actions[j] == monitor[i].action){
                    is_exists = true;
                    break;
                }
            }
            if (!is_exists){
                opt.data[0].push(monitor[i].total*1000);
                opt.legend.push(monitor[i].action);
                actions.push(monitor[i].action);
            }
        }
        var api = new jGCharts.Api();         
        $('#monitor').attr('href', api.make(opt)).lightBox({
            fixedNavigation: false,
            imageLoading: THEME_PREFIX + 'images/lightbox-ico-loading.gif',
            imageBtnClose: THEME_PREFIX + 'images/lightbox-btn-close.gif',
            imageBtnPrev: THEME_PREFIX + 'images/lightbox-btn-prev.gif',
            imageBtnNext: THEME_PREFIX + 'images/lightbox-btn-next.gif'
        });
    }

});
