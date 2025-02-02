// document.addEventListener("DOMContentLoaded", () => {
//   const scrollButton = document.getElementById("fixed__footer");

//   // 初期状態でスクロール位置を確認して表示/非表示を設定
//   const updateScrollButtonVisibility = () => {
//     const scrollPosition = window.scrollY;

//     if (scrollPosition > window.innerHeight) {
//       scrollButton.style.display = "inline-flex";
//     } else {
//       scrollButton.style.display = "none";
//     }
//   };

//   // ページ読み込み時に表示/非表示を設定
//   updateScrollButtonVisibility();

//   // スクロールイベントリスナーを追加
//   window.addEventListener("scroll", updateScrollButtonVisibility);

//   // ボタンをクリックした際の動作
//   // scrollButton.addEventListener("click", () => {
//   //   window.scrollTo({ top: 0, behavior: "smooth" });
//   // });
// });

// //   const scrollButton = document.getElementById("fixed__footer");

// //   // スクロールイベントリスナー
// //   const handleScroll = () => {
// //     const scrollPosition = window.scrollY;
// //     const isMobile = window.innerWidth <= 768; // 768px以下をスマホと定義

// //     if (!isMobile && scrollPosition > window.innerHeight) {
// //       scrollButton.style.display = "inline-flex";
// //     } else {
// //       scrollButton.style.display = "none";
// //     }
// //   };

// //   // スクロール時の処理
// //   window.addEventListener("scroll", handleScroll);

// //   // 画面リサイズ時の処理（デバイス方向変更対応）
// //   window.addEventListener("resize", handleScroll);

// //   // ボタンをクリックした際の動作
// //   scrollButton.addEventListener("click", () => {
// //     window.scrollTo({ top: 0, behavior: "smooth" });
// //   });
// // });

document.addEventListener("DOMContentLoaded", () => {
  const scrollButton = document.getElementById("fixed__footer");
  const modal = document.querySelector(".portfolio-modal");
  const openModalBtn = document.querySelector(".btn__open-modal");
  const modalMask = document.querySelector(".portfolio-modal__mask");
  const closeModalBtn = document.querySelector(".portfolio-modal__close-btn");

  // 初期状態でスクロール位置を確認して表示/非表示を設定
  const updateScrollButtonVisibility = () => {
    // モーダルがアクティブならスキップ
    if (modal.classList.contains("active")) return;

    const scrollPosition = window.scrollY;

    if (scrollPosition > window.innerHeight) {
      scrollButton.style.display = "inline-flex";
    } else {
      scrollButton.style.display = "none";
    }
  };

  // ページ読み込み時とスクロール時に実行
  updateScrollButtonVisibility();
  window.addEventListener("scroll", updateScrollButtonVisibility);

  // モーダルを開く
  openModalBtn.addEventListener("click", (e) => {
    e.preventDefault();
    modal.classList.add("active");
    modalMask.classList.add("activated");
    // `#fixed__footer` を常に表示
    scrollButton.style.display = "inline-flex";
  });

  // モーダルを閉じる
  const closeModal = () => {
    modal.classList.remove("active");
    modalMask.classList.remove("activated");
    // モーダル閉じた後、スクロール状態に応じて再確認
    updateScrollButtonVisibility();
  };

  closeModalBtn.addEventListener("click", closeModal);
  modalMask.addEventListener("click", closeModal);
});
