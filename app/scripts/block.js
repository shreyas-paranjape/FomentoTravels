/*global $:false */
$(document).ready(function () {
    'use strict';
    $('.wrap').height((($(window).height() / 3) * 2));
    $('.block').bind('click', function () {
        var that = $(this),
            offsets = that.position(),
            top = offsets.top,
            left = offsets.left,
            clone = that.clone(),
            parent = that.parent(),
            width = parent.width(),
            height = parent.height(),
            toggleLinks = function () {
                $('nav', clone).toggle();
                $('div.big', clone).toggle();
                $('.content', clone).toggle();
                $('.pics', clone).toggle();
                $('button', clone).toggle();
            },
            fadOut = function () {
                clone.animate({
                    'top': top,
                    'left': left,
                    'width': 0,
                    'height': 0
                }, 1000, 'swing', toggleLinks)
                    .siblings().animate({
                        'opacity': 1
                    }, 1000);
            };
        clone.addClass('clone')
            .appendTo(parent)
            .css({
                'top': top,
                'left': left
            })
            .animate({
                'top': 15,
                'left': 35,
                'width': width,
                'height': height
            }, 1000, 'swing', toggleLinks)
            .siblings().animate({
                'opacity': 0.1
            }, 1000);
        $('button', clone).click(fadOut);
    });
});