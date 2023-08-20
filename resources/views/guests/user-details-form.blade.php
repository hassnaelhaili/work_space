<!DOCTYPE html>
<html>

<head>
    <title>Your App</title>
    <!-- Include Bootstrap CSS directly here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
        /* Your custom styles here */
    </style>
</head>

<body style="background-color:rgb(185, 183, 183)">
    <!-- Your content here -->
    <div class="container">
        <div class="user-form text-center" style="margin: 15px">
            <h2>User Details</h2>
            <div class="container" style=" max-width: 800px; height: 300px; background-color: rgba(59, 54, 54, 0.493); ">
                <form style="max-width: 600px; margin: 0 auto;">
                    <div class="form-row" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label for="guests">Guest Count:</label>
                            <input type="number" class="form-control" id="guests" name="guests">
                        </div>


                    </div>
                    <div class="form-row" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label for="start_time">Start Time:</label>
                            <input type="time" class="form-control" id="start_time" name="start_time">
                        </div>

                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label for="start_time">End Time:</label>
                            <input type="time" class="form-control" id="start_time" name="start_time">
                        </div>

                    </div>
                    <!-- Repeat similar structure for the next row -->
                    <div class="form-row" style="display: flex; justify-content: space-between; margin-bottom: 15px;">


                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label for="start_date">Start Date:</label>
                            <input type="date" class="form-control" id="start_date" name="start_date">
                        </div>

                        <div class="form-group" style="flex: 1; margin-right: 15px;">
                            <label for="end_date">End Date:</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
                        </div>

                    </div>
                    <div class="form-row" style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                        <!-- ... -->
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>



    </div>




    <!-- Any additional scripts or content here -->
</body>

</html>
