var eventKey = localStorage.getItem("eventKey") || "`";
var panicLink = localStorage.getItem("panicLink") || "https://annaisd.schoology.com/";

document.addEventListener("keydown", function(event) {
  if (event.key === eventKey) {
    if (window.self !== window.top) {
      window.parent.location.href = panicLink;
    } else {
      window.location.href = panicLink;
    }
  }
});

var eventKeyInput = document.getElementById("eventKeyInput");
eventKeyInput.addEventListener("input", function() {
  eventKey = eventKeyInput.value;
});

var linkInput = document.getElementById("linkInput");
linkInput.addEventListener("input", function() {
  panicLink = linkInput.value;
});

function saveEventKey() {
  eventKey = eventKeyInput.value;
  localStorage.setItem("eventKey", eventKey);
  localStorage.setItem("panicLink", panicLink);
}
