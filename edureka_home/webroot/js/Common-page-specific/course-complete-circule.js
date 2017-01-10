	(function($) {

    $.fn.percentageLoader = function(options) {

        this.each(function() {
            var $this = $(this);
            var config = $.extend({}, $.fn.percentageLoader.defaultConfig, options);

            var val = parseInt($this.children(config.valElement).text()),
                init = true,
                speed = 200,
                w = parseInt($this.css('width')),
                h = parseInt($this.css('height')),
                rx = w / 2,
                ry = h / 2,
                r = rx - config.strokeWidth / 2,
                z = null,
                txt = null,
                dstop = null;

            var paper = Raphael(this, w, h);

            function minit() {
                paper.customAttributes.arc = function(value, total, R) {
                    var alpha = 360 / total * value, 
                        a = (90 - alpha) * Math.PI / 180, 
                        x = rx + R * Math.cos(a),
                        y = ry - R * Math.sin(a),
                        path;
                    if (total == value) {
                        path = [
                            ["M", rx, ry - R],
                            ["A", R, R, 0, 1, 1, rx - 0.01, ry - R]
                        ];
                    } else {
                        path = [
                            ["M", rx, ry - R],
                            ["A", R, R, 0, +(alpha > 180), 1, x, y]
                        ];
                    };

                    return {
                        path: path
                    };
                };
                paper.path().attr({
                    arc: [100, 100, r],
                    'stroke-width': config.strokeWidth,
                    'stroke': config.bgColor
                });
                if (!!val) {
                    z = paper.path().attr({
                        arc: [0.01, 100, r],
                        'stroke-width': config.strokeWidth,
                        'stroke': config.ringColor,
                        'cursor': "pointer"
                    });
                    updateVal(val, 100, r, z, 2);
                }

                txt = paper.text(rx, ry, val + "%").attr({
                    font: config.fontWeight + " " + config.fontSize + " Arial",
                    fill: config.textColor
                });
            };
            minit();
            // function getColor(size) {
            //  var arr = [];
            //  for (var i = 0; i <= 255; i++) {
            //      arr.push("rgb(" + i + "," + (255 - i) + "," + 0 + ")");
            //  }
            //  console.log(arr);
            //  return arr[parseInt(size * 2.55)];
            // }; 
            function updateVal(value, total, R, hand, id) {
                if (init) {
                    hand.animate({
                        arc: [value, total, R]
                    }, 900, ">");
                } else {
                    if (!value || value == total) {
                        value = total;
                        hand.animate({
                            arc: [value, total, R]
                        }, 750, "bounce", function() {
                            hand.attr({
                                arc: [0, total, R]
                            });
                        });
                    } else {
                        hand.animate({
                            arc: [value, total, R]
                        }, 750, "elastic");
                    }
                }
            };

        });

    };
    $.fn.percentageLoader.defaultConfig = {
        valElement: 'p',
        strokeWidth: 10,
        bgColor: '#d9d9d9',
        ringColor: '#d53f3f',
        textColor: '#9a9a9a',
        fontSize: '12px',
        fontWeight: 'normal'
    };

})(jQuery);
