document.addEventListener("DOMContentLoaded", () => {
  const trigger = document.querySelector(".fixed-cta__works");
  const modal = document.querySelector(".modal");
  const mask = document.querySelector(".modal-mask");
  const closeBtn = document.querySelector(".modal__btn");

  const closeModal = () => {
    modal.classList.remove("activated");
    mask.classList.remove("activated");
  };

  if (trigger && modal && mask) {
    // モーダルを開く
    trigger.addEventListener("click", (e) => {
      e.preventDefault();
      modal.classList.add("activated");
      mask.classList.add("activated");
    });

    // マスククリックで閉じる
    mask.addEventListener("click", closeModal);

    // モーダル外クリックで閉じる（トリガー自身は除外）
    document.addEventListener("click", (e) => {
      if (
        modal.classList.contains("activated") &&
        !modal.contains(e.target) &&
        !trigger.contains(e.target)
      ) {
        closeModal();
      }
    });

    // 「×閉じる」ボタンクリックで閉じる
    if (closeBtn) {
      closeBtn.addEventListener("click", closeModal);
    }
  }
});
