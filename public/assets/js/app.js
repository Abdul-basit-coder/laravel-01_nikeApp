const bannerImgChange = () => {
  let cards = document.querySelectorAll(".bg-card");
  let shoeImg = document.getElementById("shoe-banner");

  cards.forEach((card, index) => {
    card.addEventListener("click", () => {
      cards.forEach((x) => x.classList.remove("card-active"));
      let imgSource = index + 1;
      shoeImg.src = `assets/graphics/images/big-shoe${imgSource}.png`;
      card.classList.add("card-active");
    });
  });
};



bannerImgChange()