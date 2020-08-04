const Flickity = require('flickity');

// deklarowanie obiektu
const realizations = {
  init() {
    this.realizations = new Flickity('.main-carousel', {
      groupCells: true,
      prevNextButtons: true,
      pageDots: true,
      wrapAround: true,
      autoPlay: 4000,
    });
    this.resize();
  },

  resize() {
    window.onload = () => {
      this.realizations.resize();
    };
  },
}

export default realizations;