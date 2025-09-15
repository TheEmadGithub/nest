document.addEventListener("DOMContentLoaded", function () {
    console.log("Custom JS loaded");
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
                
                // Get the value and update URL
                let value = this.getAttribute("data-value");
                let url = new URL(window.location);
                
                if (value === 'all') {
                    url.searchParams.delete('per_page');
                } else {
                    url.searchParams.set('per_page', value);
                }
                
                // Reload page with new parameters
                window.location.href = url.toString();
            });
        });
    }

    // Sort dropdown
    let sortDropdown = document.getElementById("sort-dropdown");
    let sortOptions = document.getElementById("sort-options");
    let selectedSort = document.getElementById("selected-sort");

    console.log("Sort elements found:", {
        sortDropdown: !!sortDropdown,
        sortOptions: !!sortOptions,
        selectedSort: !!selectedSort
    });

    if (sortDropdown && sortOptions && selectedSort) {
        console.log("Setting up sort dropdown functionality");
        
        sortDropdown.addEventListener("click", function (e) {
            e.stopPropagation();
            console.log("Sort dropdown clicked");
            sortOptions.classList.toggle("active");
        });

        document.querySelectorAll("#sort-options a").forEach(function (item) {
            item.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
                console.log("Sort option clicked:", this.getAttribute("data-value"));
                
                selectedSort.innerHTML = this.textContent + ' <i class="fi-rs-angle-small-down"></i>';
                sortOptions.classList.remove("active");
                
                // Get the value and update URL
                let value = this.getAttribute("data-value");
                let url = new URL(window.location);
                
                // Map custom values to WooCommerce orderby values
                let orderbyMap = {
                    'featured': 'menu_order',
                    'low-high': 'price',
                    'high-low': 'price-desc',
                    'release': 'date',
                    'rating': 'rating'
                };
                
                if (orderbyMap[value]) {
                    url.searchParams.set('orderby', orderbyMap[value]);
                } else {
                    url.searchParams.delete('orderby');
                }
                
                console.log("Redirecting to:", url.toString());
                // Reload page with new parameters
                window.location.href = url.toString();
            });
        });
    } else {
        console.log("Sort dropdown elements not found");
    }

    // Hide dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!event.target.closest(".sort-by-cover")) {
            if (showOptions) showOptions.classList.remove("active");
            if (sortOptions) sortOptions.classList.remove("active");
        }
    });

    // Debug: Check if elements exist after a short delay
    setTimeout(function() {
        console.log("Final check - Sort elements:", {
            sortDropdown: !!document.getElementById("sort-dropdown"),
            sortOptions: !!document.getElementById("sort-options"),
            selectedSort: !!document.getElementById("selected-sort")
        });
        
        // If elements are not found, try to reinitialize
        if (!document.getElementById("sort-dropdown")) {
            console.log("Sort dropdown not found, trying to reinitialize...");
            // Try again after another delay
            setTimeout(function() {
                initializeSortDropdown();
            }, 500);
        }
    }, 1000);

    // Function to initialize sort dropdown
    function initializeSortDropdown() {
        let sortDropdown = document.getElementById("sort-dropdown");
        let sortOptions = document.getElementById("sort-options");
        let selectedSort = document.getElementById("selected-sort");

        if (sortDropdown && sortOptions && selectedSort) {
            console.log("Reinitializing sort dropdown");
            
            sortDropdown.addEventListener("click", function (e) {
                e.stopPropagation();
                console.log("Sort dropdown clicked (reinit)");
                sortOptions.classList.toggle("active");
            });

            document.querySelectorAll("#sort-options a").forEach(function (item) {
                item.addEventListener("click", function (event) {
                    event.preventDefault();
                    event.stopPropagation();
                    console.log("Sort option clicked (reinit):", this.getAttribute("data-value"));
                    
                    selectedSort.innerHTML = this.textContent + ' <i class="fi-rs-angle-small-down"></i>';
                    sortOptions.classList.remove("active");
                    
                    let value = this.getAttribute("data-value");
                    let url = new URL(window.location);
                    
                    let orderbyMap = {
                        'featured': 'menu_order',
                        'low-high': 'price',
                        'high-low': 'price-desc',
                        'release': 'date',
                        'rating': 'rating'
                    };
                    
                    if (orderbyMap[value]) {
                        url.searchParams.set('orderby', orderbyMap[value]);
                    } else {
                        url.searchParams.delete('orderby');
                    }
                    
                    console.log("Redirecting to (reinit):", url.toString());
                    window.location.href = url.toString();
                });
            });
        }
    }
});
