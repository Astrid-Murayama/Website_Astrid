// let translations = {};
// let currentLang = "ja";
// const originalTexts = {};

// // 最初に日本語テキストを保存
// document.addEventListener("DOMContentLoaded", () => {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     if (key) {
//       originalTexts[key] = el.innerHTML;
//     }
//   });

//   // イベントをセットしてから初期言語を設定
//   initLanguageToggle();
//   setLanguage("ja");
// });

// function initLanguageToggle() {
//   document.querySelector(".toggle__input").addEventListener("change", (e) => {
//     const isEnglish = e.target.checked;
//     const lang = isEnglish ? "en" : "ja";
//     setLanguage(lang);
//   });
// }

// // 言語切り替え処理
// function setLanguage(lang) {
//   currentLang = lang;

//   if (lang === "ja") {
//     applyOriginalTexts();
//     return;
//   }

//   fetch(`./json/${lang}.json`)
//     .then((res) => res.json())
//     .then((data) => {
//       translations = data;
//       applyTranslations();
//     })
//     .catch((err) =>
//       console.error(`翻訳ファイルの読み込みに失敗しました: ${err}`)
//     );
// }

// // 翻訳テキストを反映
// function applyTranslations() {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     const text = getTranslationByKey(key);
//     if (text) {
//       el.innerHTML = text;
//     }
//   });
// }

// // 日本語に戻す
// function applyOriginalTexts() {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     if (originalTexts[key]) {
//       el.innerHTML = originalTexts[key];
//     }
//   });
// }

// // ドット記法対応の翻訳取得
// function getTranslationByKey(key) {
//   return key
//     .split(".")
//     .reduce(
//       (obj, k) => (obj && obj[k] !== undefined ? obj[k] : null),
//       translations
//     );
// }

// function applyTranslations() {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     const text = getTranslationByKey(key);
//     if (text) {
//       animateTextChange(el, text);
//     }
//   });
// }

// function applyOriginalTexts() {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     const text = originalTexts[key];
//     if (text) {
//       animateTextChange(el, text);
//     }
//   });
// }

// function animateTextChange(el, newText) {
//   // 一度アニメーションをリセットして再適用
//   el.classList.remove("lang-fade");
//   void el.offsetWidth; // Reflow で再描画
//   el.innerHTML = newText;
//   el.classList.add("lang-fade");

//   // アニメーション終了後にクラスを削除
//   el.addEventListener("animationend", function handler() {
//     el.classList.remove("lang-fade");
//     el.removeEventListener("animationend", handler);
//   });
// }

// let translations = {};
// let currentLang = "ja";
// const originalTexts = {};

// // 最初に日本語テキストを保存
// document.addEventListener("DOMContentLoaded", () => {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     if (key) {
//       originalTexts[key] = el.innerHTML;
//     }
//   });

//   // イベントをセットしてから初期言語を設定
//   initLanguageToggle();
//   setLanguage("ja");
// });

// function initLanguageToggle() {
//   document.querySelector(".toggle__input").addEventListener("change", (e) => {
//     const isEnglish = e.target.checked;
//     const lang = isEnglish ? "en" : "ja";
//     setLanguage(lang);
//   });
// }

// // 言語切り替え処理
// function setLanguage(lang) {
//   currentLang = lang;

//   if (lang === "ja") {
//     applyOriginalTexts();
//     return;
//   }

//   fetch(`./json/${lang}.json`)
//     .then((res) => res.json())
//     .then((data) => {
//       translations = data;
//       applyTranslations();
//     })
//     .catch((err) =>
//       console.error(`翻訳ファイルの読み込みに失敗しました: ${err}`)
//     );
// }

// // 翻訳テキストを反映
// function applyTranslations() {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     const text = getTranslationByKey(key);
//     if (text) {
//       animateTextChange(el, text);
//     }
//   });
// }

// // 日本語に戻す
// function applyOriginalTexts() {
//   document.querySelectorAll("[data-i18n]").forEach((el) => {
//     const key = el.getAttribute("data-i18n");
//     const text = originalTexts[key];
//     if (text) {
//       animateTextChange(el, text);
//     }
//   });
// }

// // ドット記法対応の翻訳取得
// function getTranslationByKey(key) {
//   return key
//     .split(".")
//     .reduce(
//       (obj, k) => (obj && obj[k] !== undefined ? obj[k] : null),
//       translations
//     );
// }

// // アニメーション付きでテキストを変更
// function animateTextChange(el, newText) {
//   // 一度アニメーションをリセットして再適用
//   el.classList.remove("lang-fade");
//   void el.offsetWidth; // Reflow で再描画
//   el.innerHTML = newText;
//   el.classList.add("lang-fade");

//   // アニメーション終了後にクラスを削除
//   el.addEventListener("animationend", function handler() {
//     el.classList.remove("lang-fade");
//     el.removeEventListener("animationend", handler);
//   });
// }
let translations = {};
let currentLang = "ja";
const originalTexts = {};

// 初期化関数（何度でも呼べるようにしておく）
function initializeI18n() {
  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.getAttribute("data-i18n");
    if (key && !originalTexts[key]) {
      originalTexts[key] = el.innerHTML;
    }
  });

  initLanguageToggle();
  setLanguage(currentLang); // 現在の言語に合わせて再適用
}

// DOMがすでに読み込み済みかどうかで分岐
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initializeI18n);
} else {
  initializeI18n(); // すでに読み込み済みならすぐ実行
}

function initLanguageToggle() {
  const toggle = document.querySelector(".toggle__input");
  if (toggle) {
    toggle.addEventListener("change", (e) => {
      const isEnglish = e.target.checked;
      const lang = isEnglish ? "en" : "ja";
      setLanguage(lang);
    });
  }
}

function setLanguage(lang) {
  currentLang = lang;

  if (lang === "ja") {
    applyOriginalTexts();
    return;
  }

  fetch(`./json/${lang}.json`)
    .then((res) => {
      if (!res.ok) {
        throw new Error("HTTPステータスエラー: " + res.status);
      }
      return res.json();
    })
    .then((data) => {
      translations = data;
      applyTranslations();
    })
    .catch((err) => {
      console.error(`翻訳ファイルの読み込みに失敗しました: ${err}`);
    });
}

function applyTranslations() {
  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.getAttribute("data-i18n");
    const text = getTranslationByKey(key);
    if (text) {
      animateTextChange(el, text);
    }
  });
}

function applyOriginalTexts() {
  document.querySelectorAll("[data-i18n]").forEach((el) => {
    const key = el.getAttribute("data-i18n");
    const text = originalTexts[key];
    if (text) {
      animateTextChange(el, text);
    }
  });
}

function getTranslationByKey(key) {
  return key
    .split(".")
    .reduce(
      (obj, k) => (obj && obj[k] !== undefined ? obj[k] : null),
      translations
    );
}

function animateTextChange(el, newText) {
  el.classList.remove("lang-fade");
  void el.offsetWidth;
  el.innerHTML = newText;
  el.classList.add("lang-fade");

  el.addEventListener("animationend", function handler() {
    el.classList.remove("lang-fade");
    el.removeEventListener("animationend", handler);
  });
}
