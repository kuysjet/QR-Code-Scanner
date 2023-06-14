// Button
let btn = document.querySelector("button");

btn.addEventListener("click", active);

function active() {
  btn.classList.toggle("is_active");
}

// --------------------

// <!-- form submission -->

    $(document).ready(function() {
    $('#submit').click(function(event) {
        // prevent the default form submission
        event.preventDefault();
        
        // get the form data
        var form = $("#form-box");
        var url = form.attr('action');
        
        // send the form data to the server using AJAX
        $.ajax({
        url: 'sms.php', // use the form's action attribute as the URL
        type: 'POST', // use the form's method attribute as the HTTP method
        data: formData,
        success: function(response) {
            // code to execute if the form submission is successful
            alert('Message sent successfully!');
        },
        error: function(xhr, status, error) {
            // code to execute if the form submission fails
            alert('Message could not be sent. Please try again later.');
        }
        });
    });
    });
