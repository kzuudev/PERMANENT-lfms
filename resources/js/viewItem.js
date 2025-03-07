const itemList = document.querySelectorAll(".card");
const category = document.getElementById("category");
const itemImg = document.getElementById("item-img");
const studentId = document.getElementById("student-id");
const studentEmail = document.getElementById("student-email");
const findItem = document.getElementById("find-item");
const placeFound = document.getElementById("place-found");

let selectedItem = document.getElementById("modal");
let selectedCard = document.getElementById("selected-card");

itemList.forEach((items, index) => {
  items.addEventListener("click", function() {
         selectedCard = items;
         console.log(selectedCard);
         selectedCard = selectedItem;
         
         if (selectedCard) { // Ensure selectedCard exists before modifying it
            selectedCard.style.display = "flex";
        } else {
            console.error("Element with ID 'selected-card' not found.");
        }
  })
})