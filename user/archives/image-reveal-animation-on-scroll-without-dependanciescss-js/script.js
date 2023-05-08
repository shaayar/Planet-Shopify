document.addEventListener("DOMContentLoaded", function () {
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.4
  };

  // IMAGE ANIMATION

  let revealCallback = (entries) => {
    entries.forEach((entry) => {
      let container = entry.target;

      if (entry.isIntersecting) {
        console.log(container);
        container.classList.add("animating");
        return;
      }

      if (entry.boundingClientRect.top > 0) {
        container.classList.remove("animating");
      }
    });
  };

  let revealObserver = new IntersectionObserver(revealCallback, options);

  document.querySelectorAll(".reveal").forEach((reveal) => {
    revealObserver.observe(reveal);
  });

  // TEXT ANIMATION

  let fadeupCallback = (entries) => {
    entries.forEach((entry) => {
      let container = entry.target;
      container.classList.add("not-fading-up");

      if (entry.isIntersecting) {
        container.classList.add("fading-up");
        return;
      }

      if (entry.boundingClientRect.top > 0) {
        container.classList.remove("fading-up");
      }
    });
  };

  let fadeupObserver = new IntersectionObserver(fadeupCallback, options);

  document.querySelectorAll(".fadeup").forEach((fadeup) => {
    fadeupObserver.observe(fadeup);
  });
});