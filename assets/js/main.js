
  const counters = document.querySelectorAll('.counter');

  const speed = 200; // lower = faster

  const runCounter = (counter) => {
    const target = +counter.getAttribute('data-target');
    let count = 0;

    const increment = target / speed;

    const updateCounter = () => {
      if (count < target) {
        count += increment;
        counter.innerText = Math.ceil(count) + '+';
        requestAnimationFrame(updateCounter);
      } else {
        counter.innerText = target + '+';
      }
    };

    updateCounter();
  };

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        runCounter(entry.target);
        observer.unobserve(entry.target); // run once
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));
