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