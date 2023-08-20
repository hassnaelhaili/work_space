@section('content')
    <div class="food-form">
        <h2>Food Selection</h2>
        <form>
            <!-- Food options checkboxes -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="option1" id="option1" name="food_options[]">
                <label class="form-check-label" for="option1">Option 1</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="option2" id="option2" name="food_options[]">
                <label class="form-check-label" for="option2">Option 2</label>
            </div>
            <!-- Add more food options checkboxes as needed -->
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
@endsection
