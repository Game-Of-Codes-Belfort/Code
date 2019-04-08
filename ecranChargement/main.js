TweenMax.staggerTo(".point", 1, {y:50, ease:Bounce.easeOut, repeat: -1, delay: 1, yoyo:true}, 0.1);
TweenMax.from(".loading", 2, {y:500, ease:Power2.easeOut, repeat: 0, yoyo:true})
