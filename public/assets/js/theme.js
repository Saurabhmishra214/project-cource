// ==========================
// THEME TOGGLE
// ==========================
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon"),
    themeToggleLightIcon = document.getElementById("theme-toggle-light-icon"),
    themeToggleBtn = document.getElementById("theme-toggle");

// Check theme preference and set
if (
  localStorage.getItem("color-theme") === "dark" ||
  (!("color-theme" in localStorage) &&
    window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
  document.documentElement.classList.add("dark");
  themeToggleBtn.checked = false;
} else {
  document.documentElement.classList.remove("dark");
  themeToggleBtn.checked = true;
}

// Toggle theme on click
[themeToggleDarkIcon, themeToggleLightIcon, themeToggleBtn].forEach((el) => {
  el.addEventListener("click", function (e) {
    e.stopPropagation();
    if (localStorage.getItem("color-theme")) {
      if (localStorage.getItem("color-theme") === "light") {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
        themeToggleBtn.checked = false;
      } else {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
        themeToggleBtn.checked = true;
      }
    } else if (document.documentElement.classList.contains("dark")) {
      document.documentElement.classList.remove("dark");
      localStorage.setItem("color-theme", "light");
    } else {
      document.documentElement.classList.add("dark");
      localStorage.setItem("color-theme", "dark");
    }
  });
});