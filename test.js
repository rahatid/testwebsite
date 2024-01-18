let clearBtn = document.querySelector("input[type='reset']");
let submitBtn = document.getElementById("post");
function defaultclear(x) {
  let clearbutton = window.confirm("Are sure you want to clear this");
  if (!clearbutton) {
    x.preventDefault();
  }
}

clearBtn.addEventListener("click", defaultclear);
function submitdef(event) {
  if (title.value.trim() === "" || content.value.trim() === "") {
    event.preventDefault();
  }
}

function post(event) {
  let inputs = [
    document.getElementById("post"),
    document.querySelector("textarea"),
  ];

  let empty = false;
  inputs.forEach(function (input) {
    if (input.value === "") {
      empty = true;
      input.classList.add("invalid");

      input.addEventListener("focus", function () {
        input.classList.remove("invalid");
      });
    } else {
      input.classList.remove("invalid");
    }
  });
  if (empty) {
    event.preventDefault();
  }
}
submitBtn.addEventListener("click", post);
