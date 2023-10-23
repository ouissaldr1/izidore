let errorRating = document.querySelector('.js-error-rating');
let ajouterAvisButton = document.querySelector('.js-ajouter-avis-button');
let complChilds = document.querySelectorAll(".avis .compl.new .compl-child");


if (errorRating.innerHTML.trim() !== "") {
    ajouterAvisButton.click();
}
// compliments
for (let i = 0; i < complChilds.length; i++) {
    complChilds[i].addEventListener("click", function () {
      this.classList.add("clicked");
      this.querySelector("input").checked = true;

      for (let j = 0; j < complChilds.length; j++) {
        if (j !== i) {
          complChilds[j].classList.remove("clicked");
          complChilds[j].querySelector("input").checked = false;
        }
      }
    });
  }