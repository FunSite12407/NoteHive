const navHome = document.querySelector(".home");
const navItems = document.querySelectorAll(".nav-items");

const homePage = document.querySelector("#home-page");
const assignmentsPage = document.querySelector("#assignments-page");
const notesPage = document.querySelector("#notes-page");
const examPapersPage = document.querySelector("#exam-papers-page");
const aboutPage = document.querySelector("#about-page");
const pages = document.querySelectorAll(".pages");

const hidePages = () => pages.forEach(page => {
    page.classList.add("hidden");
});
hidePages();
homePage.classList.remove("hidden");

navItems.forEach(navItem => {
    navItem.addEventListener("click",
        function() {
            hidePages();
            console.log(navItem.classList[1]+"-page");
            console.log(document.getElementById(navItem.classList[1]+"-page").classList.remove("hidden"));
        }
    );
});

