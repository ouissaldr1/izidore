let stars = document.querySelectorAll("input");
let rating = document.querySelector(".hidden-rating");
for (let i = 0; i < stars.length; i++) {
  stars[i].addEventListener("click", function () {
    let note = this.value;
    rating.value = note;    
  });
}
