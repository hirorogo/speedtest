const widthText = document.getElementById("width");
const heightText = document.getElementById("height");

function updateDimensions() {
  const width = window.innerWidth;
  const height = window.innerHeight;
  widthText.innerText = `Width: ${width}px`;
  heightText.innerText = `Height: ${height}px`;
}

window.addEventListener("resize", updateDimensions);
updateDimensions();