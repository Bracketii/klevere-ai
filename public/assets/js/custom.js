// Button indicator
// var button = document.querySelector("#generate-button");

// Handle button click event
// button.addEventListener("click", function() {
//     // Activate indicator
//     button.setAttribute("data-kt-indicator", "on");
// });






// function myFunction() {
//     // Get the text field
//     var copyText = document.getElementById("myResult");
  
//     // Select the text field
//     copyText.select();
//     copyText.setSelectionRange(0, 99999); // For mobile devices
  
//     // Copy the text inside the text field
//     navigator.clipboard.writeText(copyText.value);
    
//     // Alert the copied text
//     alert("Copied the text: " + copyText.value);
//   }




//   submit on enter method
// var input = document.getElementById("chat-input");
// input.addEventListener("keypress", function(event) {
//   if (event.key === "Enter") {
//     event.preventDefault();
//     document.getElementById("generate-button").click();
//   }
// });


// Loader

tinymce.init({
    selector: 'textarea.tinymce-editor',
    plugins: '',
    menubar: '',
    toolbar: 'bold italic underline strikethrough | blocks | fontfamily | fontsize | undo redo | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    height: 620,
  });