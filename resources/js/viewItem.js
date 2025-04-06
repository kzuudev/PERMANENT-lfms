const selectedCard = document.getElementById("selected-card");
let modal = document.getElementById("modal");

document.addEventListener("DOMContentLoaded", function () {
  const itemList = document.querySelectorAll(".card");

  if (itemList.length === 0) {
    console.log("No .card elements found! Check if Blade renders them correctly.");
    return;
  }

  itemList.forEach((items) => {
    items.addEventListener("click", function () {
      console.log("Card clicked!");

      const category = items.querySelector(".category").innerText;
      const itemImgSrc = items.querySelector(".item-img").src;
      const studentId = items.querySelector(".student-id").innerText;
      const studentEmail = items.querySelector(".student-email").innerText;
      const findItem = items.querySelector(".find-item").innerText;
      const placeFound = items.querySelector(".place-found").innerText;
      const postName = items.querySelector(".postName").innerText;
      const itemDate = items.querySelector(".date").innerText;

      selectedCard.style.display = "flex";
      selectedCard.innerHTML = `
        <div class="w-full  h-full flex flex-col bg-white rounded-lg gap-3 overflow-scroll">
          <div class="w-3/5 mb-3">
            <h3 class="p-6 bg-[#eef5fd]">${category}</h3>
          </div>
          <div class="flex flex-col gap-4 pl-2.5 px-2">
            <div class="border-b-2 border-gray-200">
              <img class="w-24 h-24 mb-4 rounded" src="${itemImgSrc}" alt="">
            </div>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg text-gray-400">Student ID</h4>
              <p class="text-sm">${studentId}</p>
            </div>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg text-gray-400">Email</h4>
              <p class="text-sm">${studentEmail}</p>
            </div>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg text-gray-400">What did you lose/find</h4>
              <p class="text-sm">${findItem}</p>
            </div>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg text-gray-400">Where did you find it?</h4>
              <p class="text-sm">${itemDate}</p>
            </div>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg text-gray-400">Where did you find it?</h4>
              <p class="text-sm">${placeFound}</p>
            </div>
            <div class="flex flex-col gap-2">
              <h4 class="text-lg text-gray-400">Turned it by</h4>
              <p class="text-sm">${postName}</p>
            </div>
          </div>
        </div>`;

      modal.style.display = "flex";


      console.log("Modal updated with:", selectedCard.innerHTML);
    });
  });
});
