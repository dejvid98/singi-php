const form = document.querySelector(".form");
console.log(form);

const checkIfEmpty = (...elements) => {
  elements.forEach((element) => {
    const el = document.querySelector(`#${element}`);

    el.classList.add("invalid");

    const alertElement = document.createElement("p");

    const alertText = document.createTextNode(`${element} is required!`);

    alertElement.appendChild(alertText);

    form.prepend(alertElement);

    setTimeout(() => {
      el.classList.remove("invalid");

      form.removeChild(alertElement);
    }, 3000);
  });
};

const button = document.querySelector(".button");
button.addEventListener("click", () => {
  checkIfEmpty("naziv", "lokacija");
});
