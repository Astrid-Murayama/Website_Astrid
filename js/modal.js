// document.addEventListener("DOMContentLoaded", () => {
//   const openModalBtn = document.querySelector(".btn__open-modal");
//   const modal = document.querySelector(".portfolio-modal");
//   const modalMask = document.querySelector(".portfolio-modal__mask");
//   const closeModalBtn = document.querySelector(".portfolio-modal__close-btn");

//   // モーダルを開く
//   openModalBtn.addEventListener("click", (e) => {
//     e.preventDefault();
//     modal.classList.add("active");
//     modalMask.classList.add("activated");
//   });

//   // モーダルを閉じる
//   const closeModal = () => {
//     modal.classList.remove("active");
//     modalMask.classList.remove("activated");
//   };

//   // 閉じるボタンをクリックしたとき
//   closeModalBtn.addEventListener("click", closeModal);

//   // マスク部分をクリックしたとき
//   modalMask.addEventListener("click", closeModal);
// });

document.addEventListener("DOMContentLoaded", () => {
  const openModalBtns = document.querySelectorAll(".btn__open-modal"); // すべてのbtn__open-modalを取得
  const modal = document.querySelector(".portfolio-modal");
  const modalMask = document.querySelector(".portfolio-modal__mask");
  const closeModalBtn = document.querySelector(".portfolio-modal__close-btn");

  // モーダルを開く
  openModalBtns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      modal.classList.add("active");
      modalMask.classList.add("activated");
    });
  });

  // モーダルを閉じる
  const closeModal = () => {
    modal.classList.remove("active");
    modalMask.classList.remove("activated");
  };

  closeModalBtn.addEventListener("click", closeModal);
  modalMask.addEventListener("click", closeModal);
});
