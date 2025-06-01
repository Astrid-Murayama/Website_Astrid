/* ----------------------------------------------------------------------
ポートフォリオページに関する命令
---------------------------------------------------------------------- */

const scrollContainer = document.querySelector(".horizontal-scroll");
const rotateImg = document.querySelector(".rotate-img");
const pagetopBtn = document.querySelector(".btn-move");

// 関数化：横スクロールイベント
const handleWheelScroll = (e) => {
  if (window.innerWidth > 1023) {
    e.preventDefault();
    scrollContainer.scrollLeft += e.deltaY;
  }
};

// イベント登録（初期）
scrollContainer.addEventListener("wheel", handleWheelScroll);

// スクロールに合わせて回転
scrollContainer.addEventListener("scroll", () => {
  if (window.innerWidth > 1023) {
    const scrollLeft = scrollContainer.scrollLeft;
    const rotateDeg = scrollLeft % 360;
    rotateImg.style.transform = `rotate(${rotateDeg}deg)`;
  } else {
    rotateImg.style.transform = `rotate(0deg)`; // 回転リセット
  }
});

// ボタンクリックでスクロール戻す
pagetopBtn.addEventListener("click", (e) => {
  e.preventDefault();
  if (window.innerWidth > 1023) {
    scrollContainer.scrollTo({
      left: 0,
      behavior: "smooth",
    });
  } else {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  }
});

/* ----------------------------------------------------------------------
オープニングアニメーション
---------------------------------------------------------------------- */

document.addEventListener("DOMContentLoaded", function () {
  document.body.classList.add("move-order");
});

/* ----------------------------------------------------------------------
フェードイン
---------------------------------------------------------------------- */

gsap.registerPlugin(ScrollTrigger);

window.addEventListener("DOMContentLoaded", () => {
  // --- 初期状態の設定 ---
  gsap.set(
    [
      ".portfolio__head-info",
      ".portfolio__head-arrow",
      ".portfolio__scrollbar",
      ".portfolio__body li",
    ],
    {
      opacity: 0,
      x: 100, // 右にオフセット
    }
  );

  // --- 0.5秒後にアニメーション開始 ---
  setTimeout(() => {
    // ヘッダーやスクロールバーを一括フェードイン
    gsap.to(
      [
        ".portfolio__head-info",
        ".portfolio__head-arrow",
        ".portfolio__scrollbar",
      ],
      {
        x: 0,
        opacity: 1,
        duration: 1,
        ease: "power2.out",
        stagger: 0.2,
      }
    );

    // リスト項目を順番にフェードイン
    gsap.to(".portfolio__body li", {
      x: 0,
      opacity: 1,
      duration: 1,
      ease: "power2.out",
      stagger: 0.4, // 0.4秒ずつずれる
    });
  }, 500);
});

// 使用しないページでエラーが起きるのでフライヤーに直書き
// document.addEventListener("DOMContentLoaded", function () {
//   const modalOverlay = document.querySelector(".modal-overlay");
//   const modalImg = document.getElementById("modal-img");
//   const closeModalBtn = document.querySelector(".close-modal");

//   // ポートフォリオ画像をクリックした時の処理
//   const portfolioItems = document.querySelectorAll(".portfolio-inner");

//   portfolioItems.forEach((item) => {
//     item.addEventListener("click", function () {
//       const imgSrc = item.querySelector("img").src; // クリックされた画像のsrcを取得
//       modalImg.src = imgSrc; // モーダル内の画像を更新
//       modalOverlay.style.display = "flex"; // モーダルを表示
//     });
//   });

//   // モーダルを閉じる処理
//   closeModalBtn.addEventListener("click", function () {
//     modalOverlay.style.display = "none"; // モーダルを非表示
//   });

//   // モーダル外をクリックしても閉じる
//   modalOverlay.addEventListener("click", function (event) {
//     if (event.target === modalOverlay) {
//       modalOverlay.style.display = "none"; // モーダルを非表示
//     }
//   });
// });
