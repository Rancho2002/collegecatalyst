let a;
let time;
setInterval(() => {
  a = new Date();
  min=a.getMinutes();
  // console.log(min);
  hour=a.getHours();
  if(min<10) min='0'+String(min);
  if(hour<10) hour='0'+String(hour);
  time = hour + " : " + min;
  // a.toLocaleTimeString(time)
  let setTime = document.getElementById("time");
  setTime.innerHTML = time;
}, 1000);

// border = document.getElementsByClassName("navlink")[1];
// border.addEventListener("click", function () {
//   Array.from(border).forEach(function (element) {
//     element[1].style.border = "2px solid red";
//   });
// });

let search = document.getElementById("myInput");
search.addEventListener("input", function () {
  // console.log('input event fired.', search.value)
  let inputVal = search.value.toLowerCase();

  let filterClass = document.getElementsByClassName("collegename");
  Array.from(filterClass).forEach(function (element) {
    let filterElem = element
      .getElementsByTagName("td")[1]
      .innerText.toLowerCase();
    if (filterElem.includes(inputVal)) {
      element.style.display = "";
      // collegeheadline=element1.getElementById('collegetype').innerText;
      // collegeheadline.style.display=''
    } else {
      element.style.display = "none";
    }
  });
});

//Get the button
var mybutton = document.getElementById("backtotop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function backTotop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//maintainence

setTimeout(() => {
  document.getElementById("intro").style.display = "none";
}, 10000);

var curday = function (sp) {
  today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //As January is 0.
  var yyyy = today.getFullYear();

  if (dd < 10) dd = "0" + dd;
  if (mm < 10) mm = "0" + mm;
  return dd + sp + mm + sp + yyyy;
};

let dateIndex = curday("/");
console.log(dateIndex);
document.getElementById("date").value = dateIndex;

var form = document.getElementById("sheetdb-form");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(form.action, {
    method: "POST",
    body: new FormData(document.getElementById("sheetdb-form")),
  })
    .then((response) => response.json())
    .then((html) => {
      // you can put any JS code here
      document.getElementById("email").value = "";
      document.getElementById("message").value = "";
      alert("Thanks for your concern...We will contact you soon.");
    });
});
