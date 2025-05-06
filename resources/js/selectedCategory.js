
document.addEventListener('DOMContentLoaded', function() {
console.log("✅ selectedCategory.js is loaded!");
const categoryButtons = document.querySelectorAll('.category-btn');
const hiddenCategoryInput = document.getElementById('selected_category');
const categoryDisplay = document.getElementById('selected-category-display');

categoryButtons.forEach((button) => {
  button.addEventListener("click", function() {
    // Remove border from all buttons and reset aria-pressed
    categoryButtons.forEach(btn => {
      btn.style.border = "none";
      btn.setAttribute('aria-pressed', 'false');
    });
    
    // Highlight the selected button
    button.style.border = "2px solid black";
    button.setAttribute('aria-pressed', 'true');
    
    // Get selected category from the button's text content
    const selectedCategory = button.dataset.category || button.textContent.trim();
    
    // Update hidden input
    if (hiddenCategoryInput) {
      hiddenCategoryInput.value = selectedCategory;
    }
    
    // Display selected category (for testing)
    if (categoryDisplay) {
      categoryDisplay.textContent = `Selected category: ${selectedCategory}`;
    }
    
    console.log("Selected category:", selectedCategory);
  });
});
});
