setInterval(function () {
  var r = Math.floor(Math.random() * 30);
  var g = Math.floor(Math.random() * 30);
  var b = Math.floor(Math.random() * (30 - 20) + 20);
  // Generate a random number between 0 and 255 for each RGB value (for body)

  document.body.style.backgroundColor = "rgb(" + r + ", " + g + ", " + b + ")";
  // Set the background color of the body to the randomly generated RGB value
}, 1000); // makes the background change color every second
