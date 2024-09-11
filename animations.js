gsap.registerPlugin(ScrollTrigger);

// Check if the element with the ID 'hs_cos_wrapper_trends-report' exists
if (document.querySelector("#skills")) {
  gsap.to("#skills",
    {
      backgroundPosition: "-100%", // Ending position (background color slides in from left to right, filling the element)
      duration: 1,
      ease: "power2.inOut",
      immediateRender: false,
      scrollTrigger: {
        trigger: '#skills',                
        markers: false,
      }
    }
  );
}