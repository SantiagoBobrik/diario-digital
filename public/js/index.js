const navBarFix = document.querySelector(".header-fix");

window.addEventListener("scroll", () => {
    if (window.scrollY > 165) {
        navBarFix.classList.add("header-fix-show");
    } else {
        navBarFix.classList.remove("header-fix-show");
    }
});
