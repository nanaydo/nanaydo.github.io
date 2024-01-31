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
        clone.querySelector("[data-id='image']").src = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fmag.elcomercio.pe%2Ffama%2Frick-and-morty-explicacion-del-verdadero-origen-de-rick-sanchez-serie-de-hbo-max-nnda-nnlt-noticia%2F&psig=AOvVaw1T1TuiU__eByZejXuWWse5&ust=1706820284538000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLDn3pi_iIQDFQAAAAAdAAAAABAF"; 
        itemList.appendChild(clone);
    });

    document.querySelector(".btn.btn-light").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        itemList.replaceChildren();
    });
});

