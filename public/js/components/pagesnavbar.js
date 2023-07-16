window.onscroll = () => {
    if (window.scrollY > 100) {
        document.querySelector(".navbar").classList.add("fixed-top");
    } else {
        document.querySelector(".navbar").classList.remove("fixed-top");
    }
};