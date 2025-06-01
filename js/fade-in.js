gsap.registerPlugin(ScrollTrigger);

window.addEventListener("DOMContentLoaded", () => {
  // --- 初期状態を設定 ---
  gsap.set(
    ".hero__info-container, .hero__text-clip, .hero__ttl--main, .hero__ttl--sub, .hero__copy, .menu li",
    {
      opacity: 0,
    }
  );
  gsap.set(".menu li", {
    y: -50,
  });

  // --- heroセクションのアニメーション（1秒後に開始） ---
  setTimeout(() => {
    gsap.set(
      ".hero__info-container, .hero__text-clip, .hero__ttl--main, .hero__ttl--sub, .hero__copy",
      { opacity: 1 }
    );

    gsap.from(".hero__info-container", {
      opacity: 0,
      y: 100,
      duration: 1,
      ease: "power2.out",
    });

    gsap.from(".hero__text-clip", {
      opacity: 0,
      y: 50,
      duration: 1,
      delay: 1.3,
      ease: "power2.out",
    });

    gsap.from(".hero__ttl--main", {
      opacity: 0,
      y: 80,
      duration: 1,
      delay: 1.6,
      ease: "power2.out",
    });

    gsap.from(".hero__ttl--sub", {
      opacity: 0,
      y: 80,
      duration: 1,
      delay: 1.9,
      ease: "power2.out",
    });

    gsap.from(".hero__years", {
      opacity: 0,
      y: 80,
      duration: 1,
      delay: 2.2,
      ease: "power2.out",
    });

    gsap.from(".hero__copy", {
      opacity: 0,
      y: 50,
      duration: 1,
      delay: 2.5,
      ease: "power2.out",
      onStart: () => {
        gsap.to(".accent-red", {
          color: "white",
          duration: 0.2,
        });
      },
      onComplete: () => {
        gsap.to(".accent-red", {
          color: "red",
          duration: 3,
        });
      },
    });

    // --- ナビゲーションをバウンド表示（1024px以上のみ） ---
    if (window.innerWidth > 1023) {
      gsap.to(".menu li", {
        opacity: 1,
        y: 0,
        duration: 1,
        delay: 3.5,
        ease: "bounce.out",
        stagger: 0.2,
      });
    } else {
      // 1023px以下の場合はすぐに表示だけする
      gsap.set(".menu li", {
        opacity: 1,
        y: 0,
      });
    }
  }, 1000);

  // --- freelance-text のアニメーション（4秒後） ---
  setTimeout(() => {
    gsap.to("#freelance-text", {
      strokeDashoffset: 0,
      fill: "red",
      duration: 10,
      ease: "power2.out",
    });
  }, 4000);
});

window.addEventListener("DOMContentLoaded", () => {
  const targets = [
    ".web .section-ttl",
    ".web .web__container > p",
    ".web #carouselContainer",
    ".web .web__skill",
    ".web .btn",
  ];

  // 初期状態
  gsap.set(targets, {
    opacity: 0,
    y: 50,
  });

  const isMobile = window.innerWidth <= 1023;

  if (isMobile) {
    // モバイル：各要素に個別のScrollTrigger
    targets.forEach((selector) => {
      ScrollTrigger.create({
        trigger: selector,
        start: "top 90%",
        once: true,
        onEnter: () => {
          gsap.to(selector, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out",
          });
        },
      });
    });
  } else {
    // PC：まとめて1秒後に順番アニメーション
    ScrollTrigger.create({
      trigger: ".web.section--web",
      start: "top 80%",
      once: true,
      onEnter: () => {
        setTimeout(() => {
          const tl = gsap.timeline();
          tl.to(".web .section-ttl", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out",
          })
            .to(
              ".web .web__container > p",
              { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" },
              "-=0.4"
            )
            .to(
              "#carouselContainer",
              { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" },
              "-=0.4"
            )
            .to(
              ".web .web__skill",
              { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" },
              "-=0.4"
            )
            .to(
              ".web .btn",
              { opacity: 1, y: 0, duration: 0.8, ease: "power2.out" },
              "-=0.4"
            );
        }, 1000);
      },
    });
  }
});

window.addEventListener("DOMContentLoaded", () => {
  const targets = [
    ".flyer .section-ttl",
    ".flyer .flyer__category-container h3",
    ".flyer .flyer__info-container p",
    ".flyer .flyer__info-container .btn",
    ".flyer .flyer__works-container",
  ];

  const isMobile = window.innerWidth <= 1023;

  // 初期状態のセット
  gsap.set(targets, {
    opacity: 0,
    x: isMobile ? 0 : 100,
    y: isMobile ? 50 : 0, // モバイルは下にずらす
  });

  if (isMobile) {
    // モバイル：個別に下から上にフェードイン
    targets.forEach((selector) => {
      ScrollTrigger.create({
        trigger: selector,
        start: "top 90%",
        once: true,
        onEnter: () => {
          gsap.to(selector, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out",
          });
        },
      });
    });
  } else {
    // PC：右から左に一括アニメーション
    ScrollTrigger.create({
      trigger: ".flyer.section--flyer",
      start: "top 80%",
      once: true,
      onEnter: () => {
        setTimeout(() => {
          const tl = gsap.timeline();

          tl.to(".flyer .section-ttl", {
            opacity: 1,
            x: 0,
            duration: 0.7,
            ease: "power2.out",
          })
            .to(
              ".flyer .flyer__category-container h3",
              {
                opacity: 1,
                x: 0,
                duration: 0.7,
                ease: "power2.out",
                stagger: 0.2,
              },
              "-=0.4"
            )
            .to(
              ".flyer .flyer__info-container p",
              {
                opacity: 1,
                x: 0,
                duration: 0.7,
                ease: "power2.out",
              },
              "-=0.3"
            )
            .to(
              ".flyer .flyer__info-container .btn",
              {
                opacity: 1,
                x: 0,
                duration: 0.7,
                ease: "power2.out",
              },
              "-=0.3"
            )
            .to(
              ".flyer .flyer__works-container",
              {
                opacity: 1,
                x: 0,
                duration: 0.7,
                ease: "power2.out",
                stagger: 0.2,
              },
              "-=0.3"
            );
        }, 500);
      },
    });
  }
});

window.addEventListener("DOMContentLoaded", () => {
  const isMobile = window.innerWidth <= 1023;

  const targets = [
    ".banner .section-ttl",
    ".banner .banner__category-lists li",
    ".banner .banner__info-container .section-txt",
    ".banner .btn",
    ".banner .container",
  ];

  // 初期状態のセット
  gsap.set(targets, {
    opacity: 0,
    x: isMobile ? 0 : -100,
    y: isMobile ? 50 : 0, // モバイルでは下方向オフセット
  });

  if (isMobile) {
    // --- モバイル：個別に下から上にフェードイン ---
    targets.forEach((selector) => {
      ScrollTrigger.create({
        trigger: selector,
        start: "top 90%",
        once: true,
        onEnter: () => {
          gsap.to(selector, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out",
          });
        },
      });
    });
  } else {
    // --- PC：一括で左からフェードイン ---
    ScrollTrigger.create({
      trigger: ".banner.section--banner",
      start: "top 80%",
      once: true,
      onEnter: () => {
        setTimeout(() => {
          const tl = gsap.timeline();

          tl.to(".banner .section-ttl", {
            opacity: 1,
            x: 0,
            duration: 0.7,
            ease: "power2.out",
          })
            .to(
              ".banner .banner__category-lists li",
              {
                opacity: 1,
                x: 0,
                duration: 0.6,
                ease: "power2.out",
                stagger: 0.2,
              },
              "-=0.4"
            )
            .to(
              ".banner .banner__info-container .section-txt",
              {
                opacity: 1,
                x: 0,
                duration: 0.6,
                ease: "power2.out",
              },
              "-=0.3"
            )
            .to(
              ".banner .btn",
              {
                opacity: 1,
                x: 0,
                duration: 0.6,
                ease: "power2.out",
              },
              "-=0.3"
            )
            .to(
              ".banner .container",
              {
                opacity: 1,
                x: 0,
                duration: 0.6,
                ease: "power2.out",
              },
              "-=0.3"
            );
        }, 500);
      },
    });
  }
});

window.addEventListener("DOMContentLoaded", () => {
  const isMobile = window.innerWidth <= 1023;

  if (isMobile) {
    // --- モバイル：各要素を個別に下からフェードイン ---
    const mobileTargets = [
      ".about__info-container",
      ".about__sns-container",
      ".about__sns-container li",
    ];

    gsap.set(mobileTargets, {
      opacity: 0,
      y: 50,
    });

    mobileTargets.forEach((selector) => {
      ScrollTrigger.create({
        trigger: selector,
        start: "top 90%",
        once: true,
        onEnter: () => {
          gsap.to(selector, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out",
          });
        },
      });
    });
  } else {
    // --- PC：複数要素を連続で横方向にフェードイン ---
    gsap.set(".about__info-container", {
      opacity: 0,
      x: -100,
    });
    gsap.set(".about__sns-container", {
      opacity: 0,
      x: 100,
    });
    gsap.set(".about__sns-container li", {
      opacity: 0,
      y: 20,
    });

    ScrollTrigger.create({
      trigger: ".about",
      start: "top 80%",
      once: true,
      onEnter: () => {
        setTimeout(() => {
          const tl = gsap.timeline();

          tl.to(".about__info-container", {
            opacity: 1,
            x: 0,
            duration: 0.7,
            ease: "power2.out",
          })
            .to(
              ".about__sns-container",
              {
                opacity: 1,
                x: 0,
                duration: 0.7,
                ease: "power2.out",
              },
              "-=0.5"
            )
            .to(
              ".about__sns-container li",
              {
                opacity: 1,
                y: 0,
                duration: 0.5,
                ease: "power2.out",
              },
              "-=0.5"
            );
        }, 500);
      },
    });
  }
});

// TODO本当に必要か？
// --- カルーセルの謎記述（jQuery依存） ---
$("input").on("change", function () {
  $("body").toggleClass("blue");
});
