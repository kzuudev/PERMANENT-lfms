document
    .getElementById("filter-button")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Prevents form submission if inside a <form>
        const filterList = document.getElementById("filter");
        filterList.style.display = "flex";
    });
