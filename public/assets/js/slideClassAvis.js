class SlideShowAvis {
  constructor(){
      this.myPix = [];
      this.textImg = [];
      this.speed = 5000; // vitesse de défilement en milliseconds
      this.i = 1;
      this.interval = 0;

      // Charger les avis via une requête AJAX à l'API Symfony
      this.loadAvisData().then(() => {
          // Initialisation du slider une fois les données chargées
          $('#InfoSlider').html(this.textImg[0]);
          $('#slider').children('img').attr('src', this.myPix[0]).fadeIn();
          this.slideShowAuto();
      });
  }

  async loadAvisData() {
      try {
          let response = await fetch('/api/avis'); // URL de l'API Symfony
          let data = await response.json();

          // Boucler sur les avis et construire le slider
          data.forEach((avis) => {
              this.myPix.push(avis.image);
              this.textImg.push(`<p class="msgAvis">${avis.commentaire}<br><br><span class="nomSlide">${avis.pseudo}</span></p>`);
          });

      } catch (error) {
          console.error("Erreur lors du chargement des avis :", error);
      }
  }

  slideShowAuto(){
      this.interval = setInterval(() => {
          this.autoPlay();
      }, this.speed);
  }

  autoPlay(){
      $('#InfoSlider').html(this.textImg[this.i]);
      $('#slider').children('img').attr('src', this.myPix[this.i]);

      this.i += 1; // Augmenter l'index
      if(this.i === this.myPix.length) {
          this.i = 0;
      }
  }
}

new SlideShowAvis();
