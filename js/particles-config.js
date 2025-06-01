document.addEventListener("DOMContentLoaded", function () {
  particlesJS("particles-js", {
    particles: {
      number: {
        value: 100,
        density: { enable: true, value_area: 800 },
      },
      color: { value: "#ff0000" },
      shape: { type: "circle" },
      opacity: { value: 0.8, random: true },
      size: { value: 8, random: true },
      move: {
        speed: 3,
        direction: "none", // ランダムな方向
        out_mode: "bounce",
        attract: {
          enable: true, // 引き寄せ機能をオンにすることで、中心に集まりやすくなる
          rotateX: 600,
          rotateY: 600,
        },
      },
      line_linked: {
        enable: true,
        distance: 200,
        color: "#ff0000",
        opacity: 0.8,
        width: 1,
      },
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: { enable: true, mode: "repulse" },
      },
    },
  });
});
