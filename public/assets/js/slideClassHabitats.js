class SlideShowHabitats {
  constructor() {
    this.myPix = [];
    this.textImg = [];
    this.speed = 5000; // vitesse de défilement en milliseconds
    this.i = 1;
    this.interval = 0;

    // Charger les Aquatique via une requête AJAX à l'API Symfony
    this.loadHabitatData().then(() => {
      if (this.myPix.length > 0 && this.textImg.length > 0) {
        // Initialisation du slider une fois les données chargées
        $("#InfoSliderHabitat").html(this.textImg[0]);
        $("#sliderHabitat").children("img").attr("src", this.myPix[0]).fadeIn();
        this.slideShowAuto();
      } else {
        console.error("Aucune donnée pour le slider");
      }
    });
  }

  async loadHabitatData() {
    try {
      let response = await fetch("/api/habitat"); // URL de l'API Symfony
      let data = await response.json();

      // Boucler sur les habitat et construire le slider
      data.forEach((habitat) => {
        this.myPix.push(habitat.image_habitat);
        this.textImg.push(
          `<p class="msgAquatique">${habitat.description_habitat}<br><br><span class="nomSlideHabitat">${habitat.nom}</span></p>`
        );
      });
    } catch (error) {
      console.error("Erreur lors du chargement des habitats :", error);
      $("#InfoSliderHabitat").html(
        "<p>Impossible de charger les habitats pour le moment.</p>"
      );
    }
  }

  slideShowAuto() {
    this.interval = setInterval(() => {
      this.autoPlay();
    }, this.speed);
  }

  autoPlay() {
    const img = new Image();
    img.src = this.myPix[this.i];

    img.onload = () => {
      $("#sliderHabitat")
        .children("img")
        .fadeOut(() => {
          $("#sliderHabitat").children("img").attr("src", img.src).fadeIn();
        });
      $("#InfoSliderHabitat").html(this.textImg[this.i]);
    };

    this.i += 1; // Augmenter l'index
    if (this.i === this.myPix.length) {
      this.i = 0;
    }
  }

  pauseSlider() {
    clearInterval(this.interval);
  }

  nextSlide() {
    this.autoPlay();
  }

  previousSlide() {
    this.i = (this.i - 1 + this.myPix.length) % this.myPix.length;
    this.autoPlay();
  }
}

const slideShow = new SlideShowHabitats();