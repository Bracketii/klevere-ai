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
    height: 550,
  });



  // Overlay Loader
  const button = document.querySelector("#kt_page_loading_overlay");
// Handle toggle click event
button.addEventListener("click", function() {
    // Populate the page loading element dynamically.
    // Optionally you can skipt this part and place the HTML
    // code in the body element by refer to the above HTML code tab.
    const loadingEl = document.createElement("div");
    document.body.prepend(loadingEl);
    loadingEl.classList.add("page-loader");
    loadingEl.classList.add("flex-column");
    loadingEl.classList.add("bg-dark");
    loadingEl.classList.add("bg-opacity-25");
    loadingEl.innerHTML = `
        <span class="spinner-border text-primary" style="width:50px; height:50px;border-width:4px" role="status"></span>
        <span class="text-white-800 fs-6 fw-semibold mt-5" style="color:white !important; font-size:22px !important">Generating...</span>
    `;

    // Show page loading
    KTApp.showPageLoading();

    // Hide after 3 seconds
    setTimeout(function() {
        KTApp.hidePageLoading();
        loadingEl.remove();
    }, 500000);
});