// aboutセクションアイコン複製
window.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("sliderTrack");
  const original = track.querySelector(".about__my-skills");
  const clone = original.cloneNode(true);
  track.appendChild(clone);
});
