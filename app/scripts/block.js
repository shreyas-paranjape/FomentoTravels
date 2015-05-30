/*global $:false */
$(document).ready(function () {
    'use strict';
    var fader = function () {
        var that = $(this),
            clone = that.clone(),
            offset = that.offset(),
            blocks = that.parent().parent().parent();
        $('.block').unbind('click');
        clone
            .addClass('clone')
            .css({'top': offset.top, 'left': offset.left})
            .bind('click', function () {})
            .prependTo(blocks)
            .animate({ top: 100, left: 100, width : blocks.width() }, 1000, 'swing', function () {
                $('.fadout', clone).toggle();
                $('.content', clone).toggle();
                $('.content-more', clone).toggle();
            });
        $('.block').not(clone)
            .animate({opacity: 0}, 1000, 'swing', function () {});
        $('footer').animate({opacity: 0}, 1000, 'swing', function () {});
        $('.fadout', clone).bind('click', function () {
            var topCurrent, leftCurrent;
            if (clone.hasClass('one')) {
                topCurrent = offset.top;
                leftCurrent = offset.left;
            } else if (clone.hasClass('two')) {
                topCurrent = offset.top;
                leftCurrent = offset.left + that.width();
            } else if (clone.hasClass('three')) {
                topCurrent = offset.top + that.height();
                leftCurrent = offset.left;
            } else if (clone.hasClass('four')) {
                topCurrent = offset.top + that.height();
                leftCurrent = offset.left + that.width();
            }
            $('.block').not(clone).bind('click', fader);
            clone.animate({ top: topCurrent, left: leftCurrent, width: 0, height: 0}, 1000, 'swing', function () {
                $('.fadout', clone).toggle();
            });
            $('.block').not(clone).animate({opacity: 1}, 1000, 'swing', function () {
                clone.remove();
            });
            $('footer').animate({opacity: 1}, 1000, 'swing', function () {});
        });
    };
    $('.block').bind('click', fader);
    
});