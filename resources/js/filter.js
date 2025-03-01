document
    .getElementById("filter-button")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Prevents form submission if inside a <form>
        const filterList = document.getElementById("filter");
        filterList.style.display = "flex";
        filterList.style.transition = "opacity 0.3s ease-in-out, height 0.3s ease-in-out";
    });

    document
    .getElementById("status-button")
    .addEventListener("click", function (event) {
        event.preventDefault(); // Prevents form submission if inside a <form>
        const statusList = document.getElementById("item-lists");
        statusList.style.display = "flex";
        statusList.style.transition = "opacity 0.3s ease-in-out, height 0.3s ease-in-out";
    });
