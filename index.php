<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    

    <style>
        /* form {position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);} */
        /* body {background-color: black;} */
    </style>
</head>
<body>


<div class="container w-50 mt-5 p-5 bordered shadow">
    <h2>SMS app</h2>    
    <form action="sms.php" method="post" id="my_form" class="my-3">
        <!-- Mobile Number input -->
        <div class="mb-4">
            <label class="form-label" >Mobile Number</label>
            <input type="text" id="number" class="form-control" />
        </div>

        <!-- Message input -->
        <div class="mb-4">
            <label class="form-label">Message</label>
            <textarea class="form-control" id="text" rows="4"></textarea>
        </div>

        <!-- Submit button -->
        <input class="btn btn-primary btn-block" type="submit" id="submit" value="SEND" />
    </form>
</div>
    



<script>
    $(document).ready(function() {
    $('#submit').click(function(event) {
        // prevent the default form submission
        event.preventDefault();
        
        // get the form data
        var form = $("#my_form");
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
</script>

<!-- <script>
        $(document).ready(function() {
        $('#submit').on(click,function(event) {
            // event.preventDefault(); // prevent the form from submitting normally
            // var formData = $(this).serialize(); // serialize the form data
            $.ajax({
            url: 'sms.php', // the URL where the form data will be submitted
            type: 'POST',
            data: $("#my_form").serialize(), // the serialized form data
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
    </script> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</body>
</html>
