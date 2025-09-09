const toggle = document.getElementById("toggleMode");

toggle.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  if (document.body.classList.contains("dark")) {
    document.body.style.background = "#1e1e1e";
    document.body.style.color = "#fff";
    toggle.textContent = "☀️";
  } else {
    document.body.style.background = "#f5f5f5";
    document.body.style.color = "#333";
    toggle.textContent = "🌙";
  }
});