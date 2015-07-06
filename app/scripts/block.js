/*global $:false */
$(document).ready(function () {
    'use strict';
     //$('.blocks').height($(window).height());
    var fader = function () {
        var that = $(this),
            clone = that.clone(),
            offset = that.offset(),
            blockOneOffset = $('.block').filter('.one').offset(),
            blocks = that.parent().parent().parent();
        
        $('.block')
            .unbind('click')
            .not(clone)
                .animate({opacity: 0}, 1000, 'swing', function () {});
        
        $('footer').toggle();
        
        $('.fadout', clone).toggle();
        /*$('.content', clone).remove();
        clone.css("background-color","white");*/

        clone
            .addClass('clone')
            .css({'top': offset.top - 4, 'left': offset.left - 4, width: that.width()})
            .bind('click', function () {})
            .prependTo(blocks)
            .animate({ top: blockOneOffset.top - 4,
                      left: blockOneOffset.left - 4,
                      width : blocks.width() + 18
                      /*height: blocks.height()*/}, 1000, 'swing',
                function () {
                     //$('.content', clone).remove();
                    // $('.content-more', clone).toggle();
                });
       
        $('.content', clone).animate({opacity: 0},600, 'swing',function(){
            $('.content', clone).remove();
            $('.content-more', clone).toggle();
            $('.content-more', clone).animate({opacity: 1},500, 'swing');
        });
        //$('.content-more', clone).animate({opacity: 1},1000, 'swing');
        $('.fadout', clone).bind('click', function () {
            $('footer').toggle();
            $('.block').not(clone).bind('click', fader);
            clone.animate({ top: offset.top - 4, left: offset.left - 4, width: that.width(), height: that.height()}, 800);
            $('.block').not(clone).animate({opacity: 1}, 1000, 'swing', function () {
                clone.remove();
            });
            $('.content-more', clone).animate({opacity: 0},1000, 'swing');
        });
    };
    $('.block').bind('click', fader);
    
});