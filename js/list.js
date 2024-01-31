document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".btn.btn-primary").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        var template = document.getElementById("list-template");
        var total = itemList.childElementCount + 1;
        var clone = template.content.cloneNode(true);
        clone.querySelector("[data-id='number']").textContent = `${total}`;
        clone.querySelector("[data-id='title']").textContent = "NAME: Rick Sanchez";
        clone.querySelector("[data-id='status']").textContent = "STATUS: Vivo";
        clone.querySelector("[data-id='species']").textContent = "SPECIES: Humano";
        clone.querySelector("[data-id='image']").src = "https://hips.hearstapps.com/hmg-prod/images/rick-and-morty-image-1662104014.jpg?crop=0.315xw:0.560xh;0.351xw,0.168xh&resize=980:*"; 
        itemList.appendChild(clone);
    });

    document.querySelector(".btn.btn-light").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        itemList.replaceChildren();
    });
});

