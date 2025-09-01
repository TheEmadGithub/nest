document.addEventListener("DOMContentLoaded", function () {
    // Accordion functionality
    document.querySelectorAll(".accordion-toggle").forEach(button => {
        button.addEventListener("click", function () {
            let content = this.parentElement.nextElementSibling;
            let isActive = content.style.display === "block";

            document.querySelectorAll(".accordion-content").forEach(el => el.style.display = "none");
            document.querySelectorAll(".accordion-toggle").forEach(el => el.innerHTML = "&#9662;");

            if (!isActive) {
                content.style.display = "block";
                this.innerHTML = "&#9652;"; // Change to up arrow
            }
        });
    });

    // Dropdowns
    let showDropdown = document.getElementById("show-dropdown");
    let showOptions = document.getElementById("show-options");
    let selectedShow = document.getElementById("selected-show");

    if (showDropdown && showOptions && selectedShow) {
        showDropdown.addEventListener("click", function () {
            showOptions.classList.toggle("active");
        });

        document.querySelectorAll("#show-options a").forEach(function (item) {
            item.addEventListener("click", function (event) {
                event.preventDefault();
                selectedShow.innerHTML = this.textContent + ' <i class="fi-rs-angle-small-down"></i>';
                showOptions.classList.remove("active");
                console.log("Products per page: ", this.getAttribute("data-value"));
            });
        });
    }

    // Sort dropdown
    let sortDropdown = document.getElementById("sort-dropdown");
    let sortOptions = document.getElementById("sort-options");
    let selectedSort = document.getElementById("selected-sort");

    if (sortDropdown && sortOptions && selectedSort) {
        sortDropdown.addEventListener("click", function () {
            sortOptions.classList.toggle("active");
        });

        document.querySelectorAll("#sort-options a").forEach(function (item) {
            item.addEventListener("click", function (event) {
                event.preventDefault();
                selectedSort.innerHTML = this.textContent + ' <i class="fi-rs-angle-small-down"></i>';
                sortOptions.classList.remove("active");
                console.log("Sort by: ", this.getAttribute("data-value"));
            });
        });
    }

    // Hide dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".sort-by-cover")) {
            if (showOptions) showOptions.classList.remove("active");
            if (sortOptions) sortOptions.classList.remove("active");
        }
    });
});
