const input = document.querySelector("input");
const text = document.querySelector("p");
const button = document.querySelector("button");
const result = document.querySelector("h1");

button.addEventListener("click", () => {
  const keyword = input.value;
  const regex = new RegExp(keyword, "g");
  const textContent = text.textContent;
  const highlightedText = textContent.replace(
    regex,
    `<span style="background-color: yellow;">${keyword}</span>`
  );
  text.innerHTML = highlightedText;
  const count = (textContent.match(regex) || []).length;
  result.innerHTML = `キーワード「${keyword}」は${count}個見つかりました。`;
  input.value = "";
})