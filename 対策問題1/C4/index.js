const date1 = document.querySelector("#date1");
const date2 = document.querySelector("#date2");
const result = document.querySelector("#result");

let date1Value = null;
let date2Value = null;

const calculateDaysDifference = () => {
  if (date1Value && date2Value) {
    const d1 = new Date(date1Value);
    const d2 = new Date(date2Value);
    const diff = Math.abs(d1.getTime() - d2.getTime());
    const days = Math.ceil(diff / (1000 * 60 * 60 * 24));
    result.textContent = `日数差: ${days}日`;
  } else {
    result.textContent = "計算不可";
  }
};

date1.addEventListener("change", (e) => {
	date1Value = e.target.value;
  calculateDaysDifference();
  
});

date2.addEventListener("change", (e) => {
	date2Value = e.target.value;
  calculateDaysDifference();
});
