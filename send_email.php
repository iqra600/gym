<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

<form id="contact-form" action="send_email.php" method="POST">
    <!-- Your form content goes here -->
</form>

<!-- Add jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- JavaScript to handle form submission and show popup -->
<script>
$(document).ready(function(){
    $('#contact-form').submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response){
                alert(response); // Show the response message
                // You can customize this to show a prettier popup message using a modal or toast notification
            }
        });
    });
});
</script>

</body>
</html>
