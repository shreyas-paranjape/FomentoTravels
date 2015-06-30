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
        
        $('.fadout', clone).toggle();
        $('.content', clone).remove();
        clone.css("background-color","white");

        clone
            .addClass('clone')
            .css({'top': offset.top - 4, 'left': offset.left - 4, width: that.width(), height: that.height()})
            .bind('click', function () {})
            .prependTo(blocks)
            .animate({ top: blockOneOffset.top - 4,
                      left: blockOneOffset.left - 4,
                      width : blocks.width() + 18,
                      height: blocks.height()}, 1000, 'swing',
                function () {
                    $('.content-more', clone).toggle();
                });
        $('.fadout', clone).bind('click', function () {
            $('.content-more', clone).toggle();
            $('.block').not(clone).bind('click', fader);
            clone.animate({ top: offset.top - 4, left: offset.left - 4, width: that.width(), height: that.height()}, 1000);
            $('.block').not(clone).animate({opacity: 1}, 1000, 'swing', function () {
                clone.remove();
            });
        });
    };
    $('.block').bind('click', fader);
    
});