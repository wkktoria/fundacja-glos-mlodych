const toggleMenu = () => {
    const navList = document.querySelector(".nav-list");
    const hamburger = document.querySelector(".hamburger");

    navList.classList.toggle("active");

    if (navList.classList.contains("active")) {
        hamburger.innerHTML = "&#10005;";
    } else {
        hamburger.innerHTML = "&#9776;";
    }
};

document.querySelector(".hamburger").addEventListener("click", toggleMenu);

const carousel = document.querySelector(".carousel");
const carouselItems = document.querySelectorAll(".carousel .item");
const carouselItemWidth = carouselItems[0].offsetWidth;
const carouselIndicators = document.querySelector(".carousel-indicators");

carouselItems.forEach((_, index) => {
    const indicator = document.createElement("button");
    indicator.addEventListener("click", () => {
        carousel.scrollTo({
            left: index * carouselItemWidth,
            behavior: "smooth",
        });
    });
    carouselIndicators.appendChild(indicator);
});

const updateActiveCarouselIndicator = () => {
    const activeIndex = Math.round(carousel.scrollLeft / carouselItemWidth);
    const indicators = carouselIndicators.querySelectorAll("button");
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle("active", index === activeIndex);
    });
};

carousel.addEventListener("scroll", () => {
    clearTimeout(carousel._scrollTimer);
    carousel._scrollTimer = setTimeout(updateActiveCarouselIndicator, 100);
});

const handleCarouselButtonClick = (direction) => {
    const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
    const currentScrollLeft = carousel.scrollLeft;

    if (direction === "previous") {
        if (currentScrollLeft - carouselItemWidth < 0) {
            carousel.scrollTo({ left: maxScrollLeft, behavior: "smooth" });
        } else {
            carousel.scrollBy({ left: -carouselItemWidth, behavior: "smooth" });
        }
    } else if (direction === "next") {
        if (currentScrollLeft + carouselItemWidth >= maxScrollLeft) {
            carousel.scrollTo({ left: 0, behavior: "smooth" });
        } else {
            carousel.scrollBy({ left: carouselItemWidth, behavior: "smooth" });
        }
    }
};

document.querySelector(".carousel-previous").addEventListener("click", () => {
    handleCarouselButtonClick("previous");
    setTimeout(updateActiveCarouselIndicator, 300);
});
document.querySelector(".carousel-next").addEventListener("click", () => {
    handleCarouselButtonClick("next");
    setTimeout(updateActiveCarouselIndicator, 300);
});

let carouselAutoplayInterval = null;

const startCarouselAutoplay = () => {
    carouselAutoplayInterval = setInterval(() => {
        const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;
        const currentScrollLeft = carousel.scrollLeft;

        if (currentScrollLeft + carouselItemWidth >= maxScrollLeft) {
            carousel.scrollTo({ left: 0, behavior: "smooth" });
        } else {
            carousel.scrollBy({ left: carouselItemWidth, behavior: "smooth" });
        }

        setTimeout(updateActiveCarouselIndicator, 300);
    }, 3000);
};

startCarouselAutoplay();

const stopCarouselAutoplay = () => {
    clearInterval(carouselAutoplayInterval);
};

carousel.addEventListener("mouseenter", stopCarouselAutoplay);
carousel.addEventListener("mouseleave", startCarouselAutoplay);

carouselIndicators.addEventListener("mouseenter", stopCarouselAutoplay);
carouselIndicators.addEventListener("mouseleave", startCarouselAutoplay);
