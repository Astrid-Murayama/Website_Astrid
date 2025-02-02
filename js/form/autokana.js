function autoKana(element1, element2, passedOptions) {
  const options = Object.assign(
    {
      katakana: false,
    },
    passedOptions
  );

  const kana_extraction_pattern = new RegExp("[^ 　ぁあ-んー]", "g");
  const kana_compacting_pattern = new RegExp("[ぁぃぅぇぉっゃゅょ]", "g");
  let elName,
    elKana,
    active = false,
    timer = null,
    flagConvert = true,
    input,
    values,
    ignoreString,
    baseKana;

  elName = document.querySelector(element1);
  elKana = document.querySelector(element2);
  active = true;
  _stateClear();

  elName.addEventListener("blur", _eventBlur);
  elName.addEventListener("focus", _eventFocus);
  elName.addEventListener("keydown", _eventKeyDown);

  function start() {
    active = true;
  }

  function stop() {
    active = false;
  }

  function toggle(event) {
    // const ev = event || window.event;
    if (event) {
      const el = event.target;
      if (el.checked) {
        active = true;
      } else {
        active = false;
      }
    } else {
      active = !active;
    }
  }

  function _checkConvert(new_values) {
    if (!flagConvert) {
      if (Math.abs(values.length - new_values.length) > 1) {
        const tmp_values = new_values
          .join("")
          .replace(kana_compacting_pattern, "")
          .split("");
        if (Math.abs(values.length - tmp_values.length) > 1) {
          _stateConvert();
        }
      } else {
        if (values.length == input.length && values.join("") != input) {
          if (input.match(kana_extraction_pattern)) {
            _stateConvert();
          }
        }
      }
    }
  }

  function _checkValue() {
    let new_input, new_values;
    new_input = elName.value;
    if (new_input == "" && elKana.value != "") {
      _stateClear();
      _setKana();
    } else {
      new_input = _removeString(new_input);
      if (input == new_input) {
        return;
      } else {
        input = new_input;
        if (!flagConvert) {
          new_values = new_input.replace(kana_extraction_pattern, "").split("");
          _checkConvert(new_values);
          _setKana(new_values);
        }
      }
    }
  }

  function _clearInterval() {
    clearInterval(timer);
  }

  function _eventBlur(event) {
    _clearInterval();
  }
  function _eventFocus(event) {
    _stateInput();
    _setInterval();
  }
  function _eventKeyDown(event) {
    if (flagConvert) {
      _stateInput();
    }
  }
  function _isHiragana(chara) {
    return (
      (chara >= 12353 && chara <= 12435) || chara == 12445 || chara == 12446
    );
  }
  function _removeString(new_input) {
    if (new_input.indexOf(ignoreString) !== -1) {
      return new_input.replace(ignoreString, "");
    } else {
      let i, ignoreArray, inputArray;
      ignoreArray = ignoreString.split("");
      inputArray = new_input.split("");
      for (i = 0; i < ignoreArray.length; i++) {
        if (ignoreArray[i] == inputArray[i]) {
          inputArray[i] = "";
        }
      }
      return inputArray.join("");
    }
  }
  function _setInterval() {
    const self = this;
    timer = setInterval(_checkValue, 30);
  }
  function _setKana(new_values) {
    if (!flagConvert) {
      if (new_values) {
        values = new_values;
      }
      if (active) {
        const _val = _toKatakana(baseKana + values.join(""));
        elKana.value = _val;
        const event = new Event("change");
        elKana.dispatchEvent(event);
      }
    }
  }
  function _stateClear() {
    baseKana = "";
    flagConvert = false;
    ignoreString = "";
    input = "";
    values = [];
  }
  function _stateInput() {
    baseKana = elKana.value;
    flagConvert = false;
    ignoreString = elName.value;
  }
  function _stateConvert() {
    baseKana = baseKana + values.join("");
    flagConvert = true;
    values = [];
  }
  function _toKatakana(src) {
    if (options.katakana) {
      let c, i, str;
      str = new String();
      for (i = 0; i < src.length; i++) {
        c = src.charCodeAt(i);
        if (_isHiragana(c)) {
          str += String.fromCharCode(c + 96);
        } else {
          str += src.charAt(i);
        }
      }
      return str;
    } else {
      return src;
    }
  }
}

document.addEventListener("DOMContentLoaded", function () {
  autoKana("#name", "#furigana", {
    katakana: false, // true：カタカナ、false：ひらがな（デフォルト）
  });
});
