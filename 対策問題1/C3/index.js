const modal = document.querySelector(".modal");
const modalBar = document.querySelector(".modal-bar");

let isDragging = false;
let modalX = 0;
let modalY = 0;
let prevX = 0;
let prevY = 0;

modalBar.addEventListener("mousedown", (e) => {
	isDragging = true;
});

modalBar.addEventListener("mouseup", () => {
	isDragging = false;
});

window.addEventListener("mousemove", (e) => {
  x = e.clientX
  y = e.clientY
  if (!isDragging) {
    prevX = x;
    prevY = y;
    return;
  }

  const dx = x - prevX;
  const dy = y - prevY;
  modalX += dx;
  modalY += dy;
  prevX = x;
  prevY = y;
  modal.style.transform = `translate(${modalX}px, ${modalY}px)`;
});
