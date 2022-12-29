import "../scss/style.scss";
import transition from "./funcs/transition";
import("./funcs/navigation").then(({ default: navigation }) =>
  navigation(".burger", ".header__right")
);



const isDOMContains = (selector) => !!document.querySelector(selector);
// import("./funcs/langSwitcher").then(({ default: switcher }) => switcher());

transition();

function copyrightDate() {
  let date = new Date();
  let dateBox = document.getElementById("acutalDate");

  dateBox.innerHTML = date.getFullYear();
}

copyrightDate();
