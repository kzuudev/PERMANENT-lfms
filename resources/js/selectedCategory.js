category  = document.querySelectorAll('.category-btn');


category.forEach((selectedCategory) => {
    selectedCategory.addEventListener("click", function() {
        category.forEach(btn => btn.style.border = "none");

        button.style.border = "2px solid var(--black)";
    });
});