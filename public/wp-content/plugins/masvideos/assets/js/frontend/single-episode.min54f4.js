jQuery(function(r){if("undefined"==typeof masvideos_single_episode_params)return!1;r("body").on("init","#rating",function(){r("#rating").hide().before('<p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a><a class="star-6" href="#">6</a><a class="star-7" href="#">7</a><a class="star-8" href="#">8</a><a class="star-9" href="#">9</a><a class="star-10" href="#">10</a></span></p>')}).on("click","#respond p.stars a",function(){var s=r(this),a=r(this).closest("#respond").find("#rating"),e=r(this).closest(".stars");return a.val(s.text()),s.siblings("a").removeClass("active"),s.addClass("active"),e.addClass("selected"),!1}).on("click","#respond #submit",function(){var s=r(this).closest("#respond").find("#rating"),a=s.val();if(0<s.length&&!a&&"yes"===masvideos_single_episode_params.review_rating_required)return window.alert(masvideos_single_episode_params.i18n_required_rating_text),!1}),r("#rating").trigger("init"),r(".single-episode .episode-play-source").on("click",function(s){s.preventDefault();var a=r(this).data("content");r(".episode__player").html(a),r("html, body").animate({scrollTop:r(".episode__player")},600)})});