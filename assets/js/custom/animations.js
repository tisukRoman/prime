AOS.init();

window.addEventListener("load", () => {
  const parallax = document.querySelector("body");

  if (parallax) {
    const wrapper = document.querySelector(".hero__image-box");

    const coeff = 25;
    const speed = 0.05;

    let positionX = 0;
    let positionY = 0;
    let coordXprocent = 0;
    let coordYprocent = 0;

    function setMouseParallaxStyle() {
      const distX = coordXprocent - positionX;
      const distY = coordYprocent - positionY;

      positionX = positionX + distX * speed;
      positionY = positionY + distY * speed;

      wrapper.style.cssText = `transform: translate(${positionX / coeff}%, ${
        positionY / coeff
      }%);`;

      requestAnimationFrame(setMouseParallaxStyle);
    }

    setMouseParallaxStyle();

    parallax.addEventListener("mousemove", (e) => {
      const parallaxWidth = parallax.offsetWidth;
      const parallaxHeight = parallax.offsetHeight;

      const coordX = e.pageX - parallaxWidth / 2;
      const coordY = e.pageY - parallaxHeight / 2;

      coordXprocent = (coordX / parallaxWidth) * 100;
      coordYprocent = (coordY / parallaxHeight) * 100;
    });
  }
});
