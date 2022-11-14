jQuery(window).load(function () {
  const items = document.querySelectorAll(".accordion button");
  const img = document.querySelector(".img-changer");
  function toggleAccordion() {
    const itemToggle = this.getAttribute("aria-expanded");

    for (i = 0; i < items.length; i++) {
      items[i].setAttribute("aria-expanded", "false");
    }

    if (itemToggle == "false") {
      this.setAttribute("aria-expanded", "true");
    }

    if (items[0].ariaExpanded == "true") {
      img.src =
        "https://images.pexels.com/photos/4629634/pexels-photo-4629634.jpeg?auto=compress&cs=tinysrgb&w=1600";
    }
    if (items[1].ariaExpanded == "true") {
      img.src =
        "https://images.pexels.com/photos/3808845/pexels-photo-3808845.jpeg?auto=compress&cs=tinysrgb&w=1600";
    }
    if (items[2].ariaExpanded == "true") {
      img.src =
        "https://images.pexels.com/photos/4143791/pexels-photo-4143791.jpeg?auto=compress&cs=tinysrgb&w=1600";
    }
    if (items[3].ariaExpanded == "true") {
      img.src =
        "https://images.pexels.com/photos/5063095/pexels-photo-5063095.jpeg?auto=compress&cs=tinysrgb&w=1600";
    }
    if (items[4].ariaExpanded == "true") {
      img.src =
        "https://images.pexels.com/photos/4458421/pexels-photo-4458421.jpeg?auto=compress&cs=tinysrgb&w=1600";
    }
  }

  items.forEach((item) => item.addEventListener("click", toggleAccordion));
});
