if (document.getElementById("header-red-lantern") != null) {
    window.onscroll = function () {
        myCityHeader();
    };
    var headerRedLantern = document.getElementById("header-red-lantern");
}

function myCityHeader() {
    if (window.pageYOffset > 50) {
        headerRedLantern.classList.add("header-red-lantern");
    } else {
        headerRedLantern.classList.remove("header-red-lantern");
    }
}

$(document).ready(function () {
    $("#search").focus(function () {
        $(".search-box").addClass("border-searching");
        $(".search-icon").addClass("si-rotate");
    });
    $("#search").blur(function () {
        $(".search-box").removeClass("border-searching");
        $(".search-icon").removeClass("si-rotate");
    });
    $("#search").keyup(function () {
        if ($(this).val().length > 0) {
            $(".go-icon").addClass("go-in");
        }
        else {
            $(".go-icon").removeClass("go-in");
        }
    });
    $(".go-icon").click(function () {
        $(".search-form").submit();
    });
});

const scrollContainers = document.querySelectorAll("#ScortsInfiniteScroll");

scrollContainers.forEach((container) => {
	const scrollWidth = container.scrollWidth;
	let isScrollingPaused = false;

	window.addEventListener("load", () => {
		self.setInterval(() => {
			if (isScrollingPaused) {
				return;
			}
			const first = container.querySelector("article");

			if (!isElementInViewport(first)) {
				container.appendChild(first);
				container.scrollTo(container.scrollLeft - first.offsetWidth, 0);
			}
			if (container.scrollLeft !== scrollWidth) {
				container.scrollTo(container.scrollLeft + 1, 0);
			}
		}, 15);
	});

	function isElementInViewport(el) {
		var rect = el.getBoundingClientRect();
		return rect.right > 0;
	}

	function pauseScrolling() {
		isScrollingPaused = true;
	}

	function resumeScrolling() {
		isScrollingPaused = false;
	}
	const allArticles = container.querySelectorAll("article");
	for (let article of allArticles) {
		article.addEventListener("mouseenter", pauseScrolling);
		article.addEventListener("mouseleave", resumeScrolling);
	}
});

var timer = 4000;

var i = 0;
var max = $('#c > li').length;
 
$("#c > li").eq(i).addClass('active').css('left','0');
$("#c > li").eq(i + 1).addClass('active').css('left','25%');
$("#c > li").eq(i + 2).addClass('active').css('left','50%');
$("#c > li").eq(i + 3).addClass('active').css('left','75%');
 

setInterval(function(){ 

    $("#c > li").removeClass('active');

    $("#c > li").eq(i).css('transition-delay','0.25s');
    $("#c > li").eq(i + 1).css('transition-delay','0.5s');
    $("#c > li").eq(i + 2).css('transition-delay','0.75s');
    $("#c > li").eq(i + 3).css('transition-delay','1s');

    if (i < max-4) {
        i = i+4; 
    }

    else { 
        i = 0; 
    }  

    $("#c > li").eq(i).css('left','0').addClass('active').css('transition-delay','1.25s');
    $("#c > li").eq(i + 1).css('left','25%').addClass('active').css('transition-delay','1.5s');
    $("#c > li").eq(i + 2).css('left','50%').addClass('active').css('transition-delay','1.75s');
    $("#c > li").eq(i + 3).css('left','75%').addClass('active').css('transition-delay','2s');

}, timer);

var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    spaceBetween: 30,
    centeredSlides: false,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 0,
      modifier: 1,
      slideShadows: false
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    keyboard: {
      enabled: true
    },
    mousewheel: {
      thresholdDelta: 70
    },
    breakpoints: {
      460: {
        slidesPerView: 3
      },
      768: {
        slidesPerView: 3
      },
      1024: {
        slidesPerView: 3
      },
      1600: {
        slidesPerView: 3.6
      }
    }
});  