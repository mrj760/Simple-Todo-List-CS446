
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

