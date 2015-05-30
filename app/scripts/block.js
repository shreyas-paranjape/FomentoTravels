/*global $:false */
$(document).ready(function () {
    'use strict';
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
        

        clone
            .addClass('clone')
            .css({'top': offset.top, 'left': offset.left, width: that.width(), height: that.height()})
            .bind('click', function () {})
            .prependTo(blocks)
            .animate({ top: blockOneOffset.top,
                      left: blockOneOffset.left,
                      width : blocks.width(),
                      height: blocks.height() }, 1000, 'swing',
                function () {
                    $('.content-more', clone).toggle();
                });
        
        $('.fadout', clone).bind('click', function () {
            $('.content-more', clone).toggle();
            var topCurrent, leftCurrent;
            if (clone.hasClass('one')) {
                topCurrent = offset.top;
                leftCurrent = offset.left;
            } else if (clone.hasClass('two')) {
                topCurrent = offset.top;
                leftCurrent = offset.left;
            } else if (clone.hasClass('three')) {
                topCurrent = offset.top;
                leftCurrent = offset.left;
            } else if (clone.hasClass('four')) {
                topCurrent = offset.top;
                leftCurrent = offset.left;
            }
            $('.block').not(clone).bind('click', fader);
            clone.animate({ top: topCurrent, left: leftCurrent, width: that.width(), height: that.height()}, 1000);
            $('.block').not(clone).animate({opacity: 1}, 1000, 'swing', function () {
                clone.remove();
            });
        });
    };
    $('.block').bind('click', fader);
    
});