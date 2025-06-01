// // 以下修正版
// document.addEventListener("DOMContentLoaded", function () {
//   const sections = document.querySelectorAll("section");
//   let currentIndex = 0;
//   let isScrolling = false;

//   function scrollToSection(index) {
//     if (index < 0 || index >= sections.length) return;

//     const target = sections[index];
//     const currentTop = window.scrollY;
//     const targetTop = target.offsetTop;

//     // 現在位置とほぼ同じなら1px動かしてから scrollIntoView を呼ぶ
//     if (Math.abs(currentTop - targetTop) < 5) {
//       window.scrollTo(0, currentTop + 1);
//     }

//     isScrolling = true;
//     currentIndex = index;

//     target.scrollIntoView({
//       behavior: "smooth",
//       block: "start",
//     });

//     setTimeout(() => {
//       isScrolling = false;
//     }, 1000);
//   }

//   function isDesktop() {
//     return window.innerWidth > 1023;
//   }

//   // ホイール操作
//   document.addEventListener(
//     "wheel",
//     function (event) {
//       if (!isDesktop() || isScrolling) return;
//       event.preventDefault();
//       if (event.deltaY > 0) {
//         scrollToSection(currentIndex + 1);
//       } else if (event.deltaY < 0) {
//         scrollToSection(currentIndex - 1);
//       }
//     },
//     { passive: false }
//   );

//   // キーボード操作
//   document.addEventListener("keydown", function (event) {
//     if (!isDesktop() || isScrolling) return;
//     if (event.key === "ArrowDown") {
//       scrollToSection(currentIndex + 1);
//     } else if (event.key === "ArrowUp") {
//       scrollToSection(currentIndex - 1);
//     }
//   });

//   // ハッシュ付きURLでアクセスされたときの初期スクロール対応
//   window.addEventListener("load", () => {
//     const hash = window.location.hash;
//     if (hash) {
//       const target = document.querySelector(hash);
//       if (target) {
//         const index = Array.from(sections).indexOf(target);
//         if (index !== -1) {
//           // 少し待ってからスクロール（描画やCSSの適用を待つ）
//           setTimeout(() => {
//             scrollToSection(index);
//           }, 100);
//         }
//       }
//     }
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  // alert("読まれたよ");
  const sections = document.querySelectorAll("section");
  let currentIndex = 0;
  let isScrolling = false;

  function scrollToSection(index) {
    if (index < 0 || index >= sections.length) return;

    const target = sections[index];
    const currentTop = window.scrollY;
    const targetTop = target.offsetTop;

    // 現在位置とほぼ同じなら1px動かしてから scrollIntoView を呼ぶ
    if (Math.abs(currentTop - targetTop) < 5) {
      window.scrollTo(0, currentTop + 1);
    }

    isScrolling = true;
    currentIndex = index;

    target.scrollIntoView({
      behavior: "smooth",
      block: "start",
    });

    setTimeout(() => {
      isScrolling = false;
    }, 1000);
  }

  function isDesktop() {
    return window.innerWidth > 1023;
  }

  // ホイール操作
  document.addEventListener(
    "wheel",
    function (event) {
      if (!isDesktop() || isScrolling) return;
      event.preventDefault();
      if (event.deltaY > 0) {
        scrollToSection(currentIndex + 1);
      } else if (event.deltaY < 0) {
        scrollToSection(currentIndex - 1);
      }
    },
    { passive: false }
  );

  // キーボード操作
  document.addEventListener("keydown", function (event) {
    if (!isDesktop() || isScrolling) return;
    if (event.key === "ArrowDown") {
      scrollToSection(currentIndex + 1);
    } else if (event.key === "ArrowUp") {
      scrollToSection(currentIndex - 1);
    }
  });

  // ハッシュ付きURLでアクセスされたときの初期スクロール対応
  // window.addEventListener("load", () => {
  const hash = window.location.hash;
  if (hash) {
    const target = document.querySelector(hash);
    if (target) {
      const index = Array.from(sections).indexOf(target);
      if (index !== -1) {
        // 少し待ってからスクロール（描画やCSSの適用を待つ）
        setTimeout(() => {
          scrollToSection(index);
        }, 100);
      }
    }
  }
  // });

  // ナビゲーションのクリックイベントでページリロードを防ぐ
  // document.querySelectorAll("a[href*='#']").forEach((anchor) => {
  //   anchor.addEventListener("click", function (event) {
  //     event.preventDefault(); // デフォルトの動作（リロード）を防ぐ
  //     const hash = this.getAttribute("href");
  //     // console.log('this.getAttribute("href"): ', this.getAttribute("href"));
  //     // 引数のエラー改善必要
  //     const target = document.querySelector(hash);
  //     // console.log(
  //     //   "document.querySelector(hash);: ",
  //     //   document.querySelector(hash)
  //     // );
  //     if (target) {
  //       // alert("if1");
  //       const index = Array.from(sections).indexOf(target);
  //       if (index !== -1 && !isScrolling) {
  //         // alert("if2");
  //         // スクロール中でない場合にのみスクロール
  //         scrollToSection(index);
  //       }
  //     }
  //   });
  // });
  // document.querySelectorAll("a[href*='#']").forEach((anchor) => {
  //   anchor.addEventListener("click", function (event) {
  //     event.preventDefault(); // デフォルトの動作（リロード）を防ぐ

  //     const href = this.getAttribute("href"); // 例: "/index.php#banner" or "#banner"
  //     const hash = href.includes("#") ? `#${href.split("#")[1]}` : null;
  //     if (!hash) return;

  //     const target = document.querySelector(hash);
  //     if (target) {
  //       const index = Array.from(sections).indexOf(target);
  //       if (index !== -1 && !isScrolling) {
  //         scrollToSection(index); // スクロール実行
  //       }
  //     }
  //   });
  // });
  document.querySelectorAll('a[href*="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const originalHref = anchor.getAttribute("href");
      const parsedHref = new URL(originalHref, location.href);

      const currentPath = new URL(location.href).pathname;
      const targetPath = parsedHref.pathname;

      const formatPath = (path) => path.replace(/\/index\.[^\/]*$/, "/");

      if (formatPath(currentPath) === formatPath(targetPath)) {
        const targetId = parsedHref.hash.substring(1);
        scrollToTarget(targetId);
      } else {
        window.location = originalHref;
      }
    });
  });

  // ページ遷移後のスムーススクロール対応
  window.addEventListener("load", () => {
    const hash = window.location.hash;
    if (hash) {
      const targetId = hash.substring(1);
      setTimeout(() => {
        scrollToTarget(targetId);
      }, 300); // load の時点で、要素が存在していない可能性を考慮して遅延
    }
  });

  function scrollToTarget(targetId) {
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      const targetPosition =
        targetElement.getBoundingClientRect().top + window.scrollY;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    }
  }

  // 別ページからの遷移の場合、＃を探せずエラーになるかも

  // ナビゲーションのクリックイベントでページリロードを防ぐ
  //   document.querySelectorAll("a[href*='#']").forEach((anchor) => {
  //     // anchor.addEventListener("click", function (event) {
  //     console.log(anchor);

  //     // });
  //   });
  //   console.log(document.querySelectorAll("a[href*='#']"));
  //   console.log("aタグ：", document.querySelectorAll("a"));
});
