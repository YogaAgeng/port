<form method="POST" action="/submit-form">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <label for="type">type:</label>
    <input type="text" name="type" id="type">
    <label for="type">email:</label>
    <input type="text" name="type" id="email">
    <label for="address">address:</label>
    <input type="text" name="address" id="address">

    <button type="submit">Submit</button>
</form>

