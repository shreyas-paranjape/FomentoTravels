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
                .animate({opacity: 0}, 0, 'swing', function () {});
        $('footer').animate({opacity: 0}, 0);
        clone
            .addClass('clone')
            .css({'top': offset.top - 4, 'left': offset.left - 4, width: that.width()})
            .bind('click', function () {})
            .prependTo(blocks)
            .animate({ top: blockOneOffset.top - 4,
                      left: blockOneOffset.left - 4,
                      width : blocks.width() + 18
                      }, 1000, 'swing',
                function () {
                    $('.content-more', clone).toggle();
                    $('.content-more', clone).animate({opacity: 1}, 100, 'swing');
                    $('.content', clone).remove();
                    $('.fadout', clone).toggle();
                });
        $('.content', clone).animate({opacity: 0}, 600, 'swing', function () {
        });
        $('.fadout', clone).bind('click', function () {
            $('.fadout', clone).toggle();
             $('footer').animate({opacity: 1}, 0);
            $('.overlay-content', clone).toggle();
            $('.block').not(clone).bind('click', fader);
            clone.animate({ top: offset.top - 4, left: offset.left - 4, width: that.width(), height: that.height()}, 800);
            $('.block').not(clone).animate({opacity: 1}, 1000, 'swing', function () {
                clone.remove();
            });
            $('.content-more', clone).animate({opacity: 0}, 1000, 'swing');
        });
    };
    $('.block').bind('click', fader);
});