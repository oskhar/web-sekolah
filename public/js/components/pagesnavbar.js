let page_on = false;
document.querySelector('.dropdown-menu').addEventListener("mouseover", function (params)
{
    if (!page_on)
        document.querySelector('.dropdown-menu').classList.add("show");
});

document.querySelector('.dropdown-menu').addEventListener("mouseout", function (params)
{
    if (!page_on)
        document.querySelector('.dropdown-menu').classList.remove("show");
});

document.querySelector('.dropdown-toggle').addEventListener("mouseover", function (params)
{
    if (!page_on)
        document.querySelector('.dropdown-menu').classList.add("show");
});

document.querySelector('.dropdown-toggle').addEventListener("mouseout", function (params)
{
    if (!page_on)
        document.querySelector('.dropdown-menu').classList.remove("show");
});

document.querySelector('.dropdown-toggle').addEventListener("click",  (params) =>
{
    if (!page_on) {
        page_on = true;
        document.querySelector('.dropdown-menu').classList.add("show");
    } else {
        page_on = false;
        document.querySelector('.dropdown-menu').classList.remove("show");
    }
});

window.onscroll = () => {
    if (window.scrollY > 200) {
        document.querySelector(".navbar").classList.add("nav-fixed");
    } else {
        document.querySelector(".navbar").classList.remove("nav-fixed");
    }
};