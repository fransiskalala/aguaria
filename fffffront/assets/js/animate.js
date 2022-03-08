/* Home */
const observer1 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        const produk = entry.target.querySelector(".animate-produk");
        const proses = entry.target.querySelector(".animate-proses");
        const karir = entry.target.querySelector(".animate-karir");

        if (entry.isIntersecting) {
            produk.classList.add("animate__zoomInLeft");
            proses.classList.add("animate__zoomInUp");
            karir.classList.add("animate__zoomInRight");
            return; // if we added the class, exit the function
        }

        // We're not intersecting, so remove the class!
        produk.classList.remove("animate__zoomInLeft");
        proses.classList.remove("animate__zoomInUp");
        karir.classList.remove("animate__zoomInRight");
    });
});

observer1.observe(document.querySelector(".home-animate-wrapper"));

/* ? */