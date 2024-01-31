document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".btn.btn-primary").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        var template = document.getElementById("list-template");
        var total = itemList.childElementCount + 1;
        var clone = template.content.cloneNode(true);
        clone.querySelector("[data-id='number']").textContent = `${total}`;
        clone.querySelector("[data-id='title']").textContent = "NAME: Product";
        clone.querySelector("[data-id='status']").textContent = "STATUS: Available";
        clone.querySelector("[data-id='species']").textContent = "SPECIES: Plant";
        clone.querySelector("[data-id='image']").src = "https://rickandmortyapi.com/api/location/1"; 
        itemList.appendChild(clone);
    });

    document.querySelector(".btn.btn-light").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        itemList.replaceChildren();
    });
});

