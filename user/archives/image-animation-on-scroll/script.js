window.addEventListener("load", () => {
  const results = Splitting({
    target: ".image",
    by: "cells",
    image: true,
    rows: 8
  });

  function myCallback(el) {
    var a = new TimelineMax();
    return a.staggerFromTo(
      ".cell",
      0.5,
      {
        x: 400,
        opacity: 0
      },
      {
        x: 0,
        opacity: 1,
        ease: Power2.ease
      },
      0.05
    );
  }

  $(".image").waypoint(
    function(direction) {
      if (direction === "down") {
        /* add this.destroy() if you want the animation to only play once */
        myCallback();
      }
    },
    {
      offset: "100%"
    }
  );
});