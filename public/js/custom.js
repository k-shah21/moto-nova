window.addEventListener("load", function () {
    var loader = document.querySelector(".loading-area");
    if (loader) {
        loader.style.opacity = "0";
        loader.style.transition = "opacity 0.5s ease";
        setTimeout(function () {
            loader.style.display = "none";
        }, 500);
    }
});

// Sticky Header Logic
document.addEventListener("DOMContentLoaded", function () {
    // Check if Waypoint is defined (script loaded)
    if (
        typeof Waypoint !== "undefined" &&
        typeof Waypoint.Sticky !== "undefined"
    ) {
        var stickyHeaderElements = document.querySelectorAll(".sticky-header");
        stickyHeaderElements.forEach(function (element) {
            new Waypoint.Sticky({
                element: element,
                stuckClass: "is-fixed",
                offset: 0,
            });
        });
    }
});

// Vehicle Fleet Carousel Logic
document.addEventListener("DOMContentLoaded", function () {
    if (
        typeof jQuery !== "undefined" &&
        typeof jQuery.fn.owlCarousel !== "undefined"
    ) {
        jQuery(".twm-vehicle-fleet-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: [
                '<i class="ri-arrow-left-s-line"></i>',
                '<i class="ri-arrow-right-s-line"></i>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
            },
        });

        // Portfolio Synced Carousel
        var syncCarousel = jQuery(".twm-portfolio-sync-carousel");
        var imageCache = {}; // Cache for preloaded images

        // Preload all carousel images
        function preloadImages() {
            syncCarousel.find(".item").each(function () {
                var imgUrl = jQuery(this).data("img");
                if (imgUrl && !imageCache[imgUrl]) {
                    var img = new Image();
                    img.src = imgUrl;
                    imageCache[imgUrl] = true;
                }
            });
        }

        syncCarousel.owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: [
                '<i class="ri-arrow-left-s-line"></i>',
                '<i class="ri-arrow-right-s-line"></i>',
            ],
            responsive: {
                0: { items: 1 },
                480: { items: 2 },
                991: { items: 2 },
            },
            onInitialized: function (event) {
                preloadImages();
                setTimeout(function () {
                    jQuery(event.target)
                        .find(".owl-item.active")
                        .first()
                        .addClass("current");
                }, 100);
            },
        });

        // Update content when carousel changes
        syncCarousel.on("changed.owl.carousel", function (event) {
            if (event.property.name === "position") {
                var currentItem = jQuery(event.target)
                    .find(".owl-item.active")
                    .first();

                // Prevent redundant updates
                if (currentItem.hasClass("current") && !event.namespace) return;

                currentItem
                    .addClass("current")
                    .siblings()
                    .removeClass("current");
                var itemData = currentItem.find(".item");
                if (itemData.length) {
                    updateShowcase(itemData);
                }
            }
        });

        // Handle click on thumbnails
        syncCarousel.on("click", ".owl-item", function (e) {
            e.preventDefault();
            var $this = jQuery(this);
            var index = $this.index();
            syncCarousel.trigger("to.owl.carousel", [index, 500]);
        });

        function updateShowcase(item) {
            var img = item.data("img");
            var subtitle = item.data("subtitle");
            var title = item.data("title");
            var desc = item.data("desc");

            var $showcaseImages = jQuery(
                "#showcase-monitor-img, #showcase-laptop-img",
            );

            // Check if image is already cached
            if (imageCache[img]) {
                // Image is cached, use shorter transition
                $showcaseImages.css("opacity", ".9");

                setTimeout(function () {
                    // Update images and text simultaneously
                    $showcaseImages.attr("src", img);
                    jQuery("#sync-subtitle").text(subtitle);
                    jQuery("#sync-title").text(title);
                    jQuery("#sync-desc").text(desc);

                    // Fade in new images
                    $showcaseImages.css("opacity", "1");
                }, 300);
            } else {
                // Image not cached, preload it first
                var imgElement = new Image();
                imgElement.onload = function () {
                    imageCache[img] = true;
                    $showcaseImages.css("opacity", "0");

                    setTimeout(function () {
                        $showcaseImages.attr("src", img);
                        jQuery("#sync-subtitle").text(subtitle);
                        jQuery("#sync-title").text(title);
                        jQuery("#sync-desc").text(desc);

                        $showcaseImages.css("opacity", "1");
                    }, 300);
                };
                imgElement.src = img;
            }
        }
    }
});
