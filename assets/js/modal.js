// Click function for show the Modal

$(".show").on("click", function(){
  $(".mask").addClass("active");
});

// Function for close the Modal

function closeModal(){
  $(".mask").removeClass("active");
}

// Call the closeModal function on the clicks/keyboard

$(".close, .mask").on("click", function(){
  closeModal();
});

$(document).keyup(function(e) {
  if (e.keyCode == 27) {
    closeModal();
  }
});

