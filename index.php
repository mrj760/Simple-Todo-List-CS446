<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Final Project</title>
    <script src="todo.js"></script>
</head>

<script>
    window.addEventListener("load", function () {
    let items = document.getElementById("items");
    let newItemBtn = document.getElementById("newItemBtn");

    newItemBtn.addEventListener("click", function () {
        let newItem = document.createElement("div");

        let checkbox = document.createElement("input");
        checkbox.type = "checkbox";

        let desc = document.createElement("input");
        desc.type = "text";

        newItem.appendChild(checkbox);
        newItem.appendChild(desc);
        items.appendChild(newItem);
    })
})
</script>

<body>
    <h1>My List</h1>
    <div id="items"></div>
    <br>
    <button id="newItemBtn">New Event</button>
</body>

</html>