// load DOM manipulation script after page is loaded
window.onload = init;

function init() {
  // onClick
  document.getElementById("info-text-toggle").addEventListener("click", () => {
    const infoText = document.querySelector(".info-text");
    if (infoText.style.display === "none") {
      infoText.style.display = "block";
      document.querySelector("#info-text-toggle").innerHTML = "hide";
    } else {
      infoText.style.display = "none";
      document.querySelector("#info-text-toggle").innerHTML = "show";
    }
  });
}
