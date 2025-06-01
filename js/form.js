document.addEventListener("DOMContentLoaded", () => {
  const inputs = document.querySelectorAll("input, textarea");

  inputs.forEach((el) => {
    const checkFilled = () => {
      if (el.value.trim() !== "") {
        el.classList.add("filled");
      } else {
        el.classList.remove("filled");
      }
    };

    el.addEventListener("input", checkFilled);
    checkFilled(); // 初期値でも確認（バリデーションエラー後の表示対応）
  });
});
