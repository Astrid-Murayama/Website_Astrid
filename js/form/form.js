// /*------------------------------------------------
// 正規表現リスト
// ------------------------------------------------*/

// // 以下は、非常に緩い電話番号の形式条件。条件は以下。
// // 0個か1個の+、半角数字が0個以上、半角のハイフン・スペース・開始括弧・ピリオドが0個か1個、半角数字が2個以上、半角のハイフン・スペース・閉じ括弧・開始括弧・ピリオドが0個か1個、半角数字が2個以上、半角のハイフン・スペース・閉じ括弧・開始括弧・ピリオドが0個か1個、半角数字が2個以上、半角のスペース・閉じ括弧が0個か1個。
// const phoneRegex =
//   /^[\+]?[0-9]*[-\s\(\.]?[0-9]{2,}[-\s\)\(\.]?[0-9]{2,}[-\s\)\(\.]?[0-9]{2,}[s\)]?$/;

// // メールアドレスの形式条件。
// const emailRegex =
//   /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+\.[A-Za-z0-9]+$/;

// const form = document.querySelector(".js-form");
// const submitButton = document.querySelector(".js-formSubmitBtn");
// if (form) {
//   // 同意ボタンにチェックで送信ボタン有効化
//   // const agree = document.querySelector('.js-agree');

//   // 戻るボタンクリック時に確認ボタンのdisabledを削除
//   const backCheck =
//     window?.performance?.getEntriesByType("navigation")[0].type ===
//     "back_forward";
//   if (backCheck) {
//     submitButton.disabled = false;
//   }
//   agree.addEventListener("change", () => {
//     agree.checked
//       ? (submitButton.disabled = false)
//       : (submitButton.disabled = true);
//   });
//   // バリデーション対象の要素の取得とエラーメッセージの設定
//   const formItem = {
//     yourName: {
//       element: document.querySelector("input#your-name"),
//       errorMessage: "お名前を入力してください",
//     },
//     furigana: {
//       element: document.querySelector("input#your-furigana"),
//       errorMessage: "ふりがなを入力してください",
//     },
//     email: {
//       element: document.querySelector("input#your-email"),
//       errorMessage: "メールアドレスを入力してください",
//     },
//     emailConfirm: {
//       element: document.querySelector("input#your-email-confirm"),
//       errorMessage: "確認用メールアドレスを入力してください",
//     },
//     tel: {
//       element: document.querySelector("input#your-tel"),
//       errorMessage: "電話番号を入力してください",
//     },
//     postalCode: {
//       element: document.querySelector("input#postal-code"),
//       errorMessage: "郵便番号をご入力ください。",
//     },
//     address: {
//       element: document.querySelector("input#your-address"),
//       errorMessage: "住所を入力してください",
//     },
//     message: {
//       element: document.querySelector("textarea#your-message"),
//       errorMessage: "お問い合わせ内容を入力してください",
//     },
//   };
//   const itemKeys = Object.keys(formItem);

//   // submitボタンクリック時の挙動
//   form.addEventListener("submit", (e) => {
//     e.preventDefault();
//     // let formCheck = true;

//     // 入力されているかどうかの確認
//     itemKeys.forEach((key) => {
//       const error = formItem[key].element.nextElementSibling;
//       if (
//         formItem[key].element.value.trim() === "" ||
//         formItem[key].element.value === null
//       ) {
//         formErrorAction(
//           error,
//           formItem[key].errorMessage,
//           "block",
//           formItem[key],
//           false
//         );
//       } else {
//         formErrorAction(error, "", "none", formItem[key], true);
//         // メール・確認用メールの形式確認
//         if (key == "email" || key == "emailConfirm") {
//           if (!emailRegex.test(formItem[key].element.value)) {
//             formErrorAction(
//               error,
//               "メールアドレスの形式が正しくありません。",
//               "block",
//               formItem[key],
//               false
//             );
//           } else {
//             formErrorAction(error, "", "none", formItem[key], true);
//           }
//         }
//         // メール確認用の確認
//         if (key == "emailConfirm") {
//           if (
//             formItem.email.element.value !==
//               formItem.emailConfirm.element.value &&
//             formItem.emailConfirm.element.value !== ""
//           ) {
//             formErrorAction(
//               error,
//               "メールアドレスが一致しません",
//               "block",
//               formItem.emailConfirm,
//               false
//             );
//           } else {
//             formErrorAction(error, "", "none", formItem.emailConfirm, true);
//           }
//         }
//         // 電話番号の形式確認
//         if (key == "tel") {
//           if (!phoneRegex.test(formItem[key].element.value)) {
//             formErrorAction(
//               error,
//               "お電話番号の形式が正しくありません。",
//               "block",
//               formItem[key],
//               false
//             );
//           } else {
//             formErrorAction(error, "", "none", formItem[key], true);
//           }
//         }
//       }
//     });

//     let judgeItems = [];
//     itemKeys.forEach((key) => {
//       judgeItems.push(formItem[key].judge);
//       console.log(key + " : " + formItem[key].judge);
//     });

//     judgeItems.every((judge) => judge) ? form.submit() : errorScroll();

//     // エラーがある場合、フォームのトップにスクロール
//     function errorScroll() {
//       const header = document.querySelector(".js-header");
//       const headerHeight = header.offsetHeight;
//       const rect = form.getBoundingClientRect().top;
//       const offset = window.scrollY;
//       const target = rect + offset - headerHeight - 30;
//       window.scrollTo({
//         top: target,
//         behavior: "smooth",
//       });
//     }
//   });

//   // エラー項目修正時の挙動
//   itemKeys.forEach((key) => {
//     formItem[key].element.addEventListener("blur", () => {
//       const error = formItem[key].element.nextElementSibling;
//       if (formItem[key].element.value.trim()) {
//         formErrorAction(
//           error,
//           formItem[key].errorMessage,
//           "none",
//           formItem[key],
//           true
//         );
//         // 名前入力時にふりがなにも入力された場合、エラー解除
//         if (key == "yourName") {
//           const furiganaError = formItem.furigana.element.nextElementSibling;
//           if (formItem.furigana.element.value.trim() !== "") {
//             formErrorAction(furiganaError, "", "none", formItem.furigana, true);
//           }
//         }
//         // メール入力時に、確認用にも入力があり、「メールアドレスが一致しません」のエラーがあった場合の処理
//         if (key == "email") {
//           const confirmError = formItem.emailConfirm.element.nextElementSibling;
//           if (
//             formItem.email.element.value ===
//               formItem.emailConfirm.element.value &&
//             confirmError.textContent === "メールアドレスが一致しません"
//           ) {
//             formErrorAction(
//               confirmError,
//               "",
//               "none",
//               formItem.emailConfirm,
//               true
//             );
//           }
//         }
//         // メール・確認用メールの形式確認
//         if (key == "email" || key == "emailConfirm") {
//           if (emailRegex.test(formItem[key].element.value)) {
//             formErrorAction(error, "", "none", formItem[key], true);
//           } else {
//             formErrorAction(
//               error,
//               "メールアドレスの形式が正しくありません。",
//               "block",
//               formItem[key],
//               false
//             );
//           }
//         }
//         // 電話番号の形式確認
//         if (key == "tel") {
//           if (phoneRegex.test(formItem[key].element.value)) {
//             formErrorAction(error, "", "none", formItem[key], true);
//           } else {
//             formErrorAction(
//               error,
//               "お電話番号の形式が正しくありません。",
//               "block",
//               formItem[key],
//               false
//             );
//           }
//         }
//         // メール確認用の確認
//         if (key == "emailConfirm") {
//           if (
//             formItem.email.element.value !==
//               formItem.emailConfirm.element.value &&
//             formItem.emailConfirm.element.value !== ""
//           ) {
//             formErrorAction(
//               error,
//               "メールアドレスが一致しません",
//               "block",
//               formItem.emailConfirm,
//               false
//             );
//           } else {
//             formErrorAction(error, "", "none", formItem.emailConfirm, true);
//           }
//         }
//       } else {
//         formErrorAction(
//           error,
//           formItem[key].errorMessage,
//           "block",
//           formItem[key],
//           false
//         );
//         if (key == "yourName") {
//           const furiganaError = formItem.furigana.element.nextElementSibling;
//           if (formItem.furigana.element.value.trim() !== "") {
//             formErrorAction(furiganaError, "", "none", formItem.furigana, true);
//             console.log("からじゃない : " + formItem.furigana.element.value);
//           } else {
//             formErrorAction(
//               furiganaError,
//               formItem.furigana.errorMessage,
//               "block",
//               formItem.furigana,
//               false
//             );
//             console.log("から : " + formItem.furigana.element.value);
//           }
//         }
//       }
//     });
//   });
// }

// // エラー表示時のメッセージ内容と表示・非表示
// function formErrorAction(target, message, style, item, boolean) {
//   target.textContent = message;
//   target.style.display = style;
//   item.judge = boolean;
// }

// // 名前フィールドとエラーコンテナを取得
// const nameField = document.getElementById("name");
// const errorContainer = nameField.nextElementSibling;

// // バリデーション関数
// function validateName() {
//   // エラーをリセット
//   errorContainer.textContent = "";

//   // 入力値を取得
//   const nameValue = nameField.value.trim();

//   // バリデーションチェック
//   if (nameValue === "") {
//     errorContainer.textContent = "お名前を入力してください。";
//     return false;
//   } else if (nameValue.length < 2) {
//     errorContainer.textContent = "お名前は2文字以上で入力してください。";
//     return false;
//   } else if (!/^[ぁ-んァ-ヶー一-龠々a-zA-Z\s]+$/.test(nameValue)) {
//     errorContainer.textContent = "お名前に無効な文字が含まれています。";
//     return false;
//   }

//   // エラーがない場合
//   return true;
// }

// // リアルタイムバリデーション (inputイベント)
// nameField.addEventListener("input", validateName);

// // フォーム送信時のバリデーション
// document
//   .getElementById("contact-form")
//   .addEventListener("submit", function (event) {
//     if (!validateName()) {
//       event.preventDefault(); // バリデーションに失敗した場合、送信を中止
//     }
//   });

// const emailField = document.getElementById("email");
// const emailConfirmationField = document.getElementById("email-confirmation");
// const emailErrorContainer = emailField.nextElementSibling;
// const emailConfirmationErrorContainer =
//   emailConfirmationField.nextElementSibling;

// // メールアドレスの形式をチェックする正規表現
// const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// // メールアドレスのバリデーション関数
// function validateEmail() {
//   emailErrorContainer.textContent = ""; // エラーリセット
//   const emailValue = emailField.value.trim();

//   if (emailValue === "") {
//     emailErrorContainer.textContent = "メールアドレスを入力してください。";
//     return false;
//   } else if (!emailPattern.test(emailValue)) {
//     emailErrorContainer.textContent =
//       "正しいメールアドレスの形式で入力してください。";
//     return false;
//   }

//   return true;
// }

// // 確認用メールアドレスのバリデーション関数
// function validateEmailConfirmation() {
//   emailConfirmationErrorContainer.textContent = ""; // エラーリセット
//   const emailValue = emailField.value.trim();
//   const emailConfirmationValue = emailConfirmationField.value.trim();

//   if (emailConfirmationValue === "") {
//     emailConfirmationErrorContainer.textContent =
//       "確認用メールアドレスを入力してください。";
//     return false;
//   } else if (emailConfirmationValue !== emailValue) {
//     emailConfirmationErrorContainer.textContent =
//       "メールアドレスが一致しません。";
//     return false;
//   }

//   return true;
// }

// // リアルタイムバリデーション (inputイベント)
// emailField.addEventListener("input", validateEmail);
// emailConfirmationField.addEventListener("input", validateEmailConfirmation);

// // フォーム送信時のバリデーション
// document
//   .getElementById("contact-form")
//   .addEventListener("submit", function (event) {
//     const isEmailValid = validateEmail();
//     const isEmailConfirmationValid = validateEmailConfirmation();

//     if (!isEmailValid || !isEmailConfirmationValid) {
//       event.preventDefault(); // バリデーション失敗時に送信を中止
//     }
//   });

// // フィールドの取得
// const nameField = document.getElementById("name");
// const furiganaField = document.getElementById("furigana");
// const emailField = document.getElementById("email");
// const emailConfirmationField = document.getElementById("email-confirmation");
// const phoneField = document.getElementById("phone");
// const inquiryField = document.getElementById("inquiry");
// const form = document.getElementById("contact-form");

// // エラーメッセージのクリア
// function clearError(field) {
//   const errorContainer = field.nextElementSibling;
//   if (errorContainer) {
//     errorContainer.textContent = "";
//   }
// }

// // エラーメッセージの表示
// function showError(field, message) {
//   const errorContainer = field.nextElementSibling;
//   if (errorContainer) {
//     errorContainer.textContent = message;
//   }
// }

// // バリデーション関数
// const validators = {
//   name: (field) => {
//     const namePattern = /^[ぁ-んァ-ヶ一-龠々a-zA-Z\s]+$/;
//     clearError(field);
//     const value = field.value.trim();
//     if (value === "") {
//       showError(field, "お名前を入力してください。");
//       return false;
//     }
//     if (value.length > 50) {
//       showError(field, "お名前は50文字以内で入力してください。");
//       return false;
//     }
//     if (!namePattern.test(value)) {
//       showError(
//         field,
//         "お名前は漢字、ひらがな、カタカナ、アルファベット、またはスペースのみで入力してください。"
//       );
//       return false;
//     }
//     return true;
//   },
//   furigana: (field) => {
//     const furiganaPattern = /^[ぁ-んー\s]+$/;
//     clearError(field);
//     const value = field.value.trim();
//     if (value === "") {
//       showError(field, "ふりがなを入力してください。");
//       return false;
//     }
//     if (!furiganaPattern.test(value)) {
//       showError(field, "ふりがなはひらがなで入力してください。");
//       return false;
//     }
//     return true;
//   },
//   email: (field) => {
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     clearError(field);
//     const value = field.value.trim();
//     if (value === "") {
//       showError(field, "メールアドレスを入力してください。");
//       return false;
//     }
//     if (!emailPattern.test(value)) {
//       showError(field, "正しいメールアドレスの形式で入力してください。");
//       return false;
//     }
//     return true;
//   },
//   emailConfirmation: () => {
//     clearError(emailConfirmationField);
//     if (emailConfirmationField.value.trim() !== emailField.value.trim()) {
//       showError(emailConfirmationField, "メールアドレスが一致しません。");
//       return false;
//     }
//     return true;
//   },
//   phone: (field) => {
//     const phonePattern = /^\d{2,4}-\d{2,4}-\d{4}$/;
//     clearError(field);
//     const value = field.value.trim();
//     if (value !== "" && !phonePattern.test(value)) {
//       showError(field, "正しい電話番号の形式で入力してください。");
//       return false;
//     }
//     return true;
//   },
//   inquiry: (field) => {
//     clearError(field);
//     const value = field.value.trim();
//     if (value === "") {
//       showError(field, "ご相談内容を入力してください。");
//       return false;
//     }
//     return true;
//   },
// };

// // 各フィールドにバリデーションを適用
// function addBlurEvent(field, validator) {
//   field.addEventListener("blur", () => validator(field));
// }

// // フィールドにイベントを設定
// addBlurEvent(nameField, validators.name);
// addBlurEvent(furiganaField, validators.furigana);
// addBlurEvent(emailField, validators.email);
// addBlurEvent(phoneField, validators.phone);
// addBlurEvent(inquiryField, validators.inquiry);
// emailConfirmationField.addEventListener("blur", validators.emailConfirmation);

// form.addEventListener("submit", function (event) {
//   const isValid =
//     validators.name(nameField) &&
//     validators.furigana(furiganaField) &&
//     validators.email(emailField) &&
//     validators.emailConfirmation() &&
//     validators.phone(phoneField) &&
//     validators.inquiry(inquiryField);

//   // 必須項目が空欄の場合にエラーメッセージを表示し、送信を中止
//   if (!isValid) {
//     event.preventDefault(); // バリデーション失敗時に送信を中止
//     // 各必須項目が空欄のままで送信ボタンが押された場合、エラーメッセージを発火させる
//     if (nameField.value.trim() === "") {
//       showError(nameField, "お名前を入力してください。");
//     }
//     if (furiganaField.value.trim() === "") {
//       showError(furiganaField, "ふりがなを入力してください。");
//     }
//     if (emailField.value.trim() === "") {
//       showError(emailField, "メールアドレスを入力してください。");
//     }
//     if (inquiryField.value.trim() === "") {
//       showError(inquiryField, "ご相談内容を入力してください。");
//     }
//   }
// });

// ラジオボタンが選択されたときの処理
document.querySelectorAll('input[name="service"]').forEach((radio) => {
  radio.addEventListener("change", function () {
    // 画像を変更するimgタグを取得
    const img = document.getElementById("service-img");

    // 選択されたラジオボタンのvalueに応じて画像を変更
    if (this.id === "web-site") {
      img.src = "/img/service/page_top/service/img_web.png"; // ウェブサイト制作の画像
    } else if (this.id === "flyer") {
      img.src = "/img/service/page_top/service/img_flyer.png"; // フライヤー制作の画像
    } else if (this.id === "banner") {
      img.src = "/img/service/page_top/service/img_banner.png"; // バナー制作の画像
    } else if (this.id === "other") {
      img.src = "/img/service/page_top/service/img_other.png"; // その他の画像
    }
  });
});

// フィールドの取得
const nameField = document.getElementById("name");
const furiganaField = document.getElementById("furigana");
const emailField = document.getElementById("email");
const emailConfirmationField = document.getElementById("email-confirmation");
const phoneField = document.getElementById("phone");
const inquiryField = document.getElementById("inquiry");
const serviceRadios = document.getElementsByName("service"); // ラジオボタンの取得
const form = document.getElementById("contact-form");

// エラーメッセージのクリア
function clearError(field) {
  const errorContainer = field.nextElementSibling;
  if (errorContainer) {
    errorContainer.textContent = "";
  }
}

// エラーメッセージの表示
function showError(field, message) {
  const errorContainer = field.nextElementSibling;
  if (errorContainer) {
    errorContainer.textContent = message;
  }
}

// バリデーション関数
const validators = {
  name: (field) => {
    const namePattern = /^[ぁ-んァ-ヶ一-龠々a-zA-Z\s]+$/;
    clearError(field);
    const value = field.value.trim();
    if (value === "") {
      showError(field, "お名前を入力してください。");
      return false;
    }
    if (value.length > 50) {
      showError(field, "お名前は50文字以内で入力してください。");
      return false;
    }
    if (!namePattern.test(value)) {
      showError(
        field,
        "お名前は漢字、ひらがな、カタカナ、アルファベット、またはスペースのみで入力してください。"
      );
      return false;
    }
    return true;
  },
  furigana: (field) => {
    const furiganaPattern = /^[ぁ-んー\s]+$/;
    clearError(field);
    const value = field.value.trim();
    if (value === "") {
      showError(field, "ふりがなを入力してください。");
      return false;
    }
    if (!furiganaPattern.test(value)) {
      showError(field, "ふりがなはひらがなで入力してください。");
      return false;
    }
    return true;
  },
  email: (field) => {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    clearError(field);
    const value = field.value.trim();
    if (value === "") {
      showError(field, "メールアドレスを入力してください。");
      return false;
    }
    if (!emailPattern.test(value)) {
      showError(field, "正しいメールアドレスの形式で入力してください。");
      return false;
    }
    return true;
  },
  emailConfirmation: () => {
    clearError(emailConfirmationField);
    if (emailConfirmationField.value.trim() !== emailField.value.trim()) {
      showError(emailConfirmationField, "メールアドレスが一致しません。");
      return false;
    }
    return true;
  },
  phone: (field) => {
    const phonePattern = /^\d{2,4}-\d{2,4}-\d{4}$/;
    clearError(field);
    const value = field.value.trim();
    if (value !== "" && !phonePattern.test(value)) {
      showError(field, "正しい電話番号の形式で入力してください。");
      return false;
    }
    return true;
  },
  inquiry: (field) => {
    clearError(field);
    const value = field.value.trim();
    if (value === "") {
      showError(field, "ご相談内容を入力してください。");
      return false;
    }
    return true;
  },
  // ラジオボタンのバリデーション
  service: () => {
    const isSelected = Array.from(serviceRadios).some((radio) => radio.checked);
    if (!isSelected) {
      const errorContainer = document.querySelector(
        ".contact__service-select .contact-form__error-container"
      );
      if (errorContainer) {
        errorContainer.textContent = "ご検討中のサービスを選択してください。";
      }
      return false;
    }
    return true;
  },
};

// 各フィールドにバリデーションを適用
function addBlurEvent(field, validator) {
  field.addEventListener("blur", () => validator(field));
}

// フィールドにイベントを設定
addBlurEvent(nameField, validators.name);
addBlurEvent(furiganaField, validators.furigana);
addBlurEvent(emailField, validators.email);
addBlurEvent(phoneField, validators.phone);
addBlurEvent(inquiryField, validators.inquiry);
emailConfirmationField.addEventListener("blur", validators.emailConfirmation);

// ラジオボタンのバリデーション
form.addEventListener("submit", function (event) {
  const isValid =
    validators.name(nameField) &&
    validators.furigana(furiganaField) &&
    validators.email(emailField) &&
    validators.emailConfirmation() &&
    validators.phone(phoneField) &&
    validators.inquiry(inquiryField) &&
    validators.service(); // ラジオボタンのバリデーションを追加

  // 必須項目が空欄の場合にエラーメッセージを表示し、送信を中止
  if (!isValid) {
    event.preventDefault(); // バリデーション失敗時に送信を中止
    // 各必須項目が空欄のままで送信ボタンが押された場合、エラーメッセージを発火させる
    if (nameField.value.trim() === "") {
      showError(nameField, "お名前を入力してください。");
    }
    if (furiganaField.value.trim() === "") {
      showError(furiganaField, "ふりがなを入力してください。");
    }
    if (emailField.value.trim() === "") {
      showError(emailField, "メールアドレスを入力してください。");
    }
    if (inquiryField.value.trim() === "") {
      showError(inquiryField, "ご相談内容を入力してください。");
    }
  }
});
