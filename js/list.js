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
        clone.querySelector("[data-id='image']").src = "https://elcomercio.pe/resizer/4WQWP7E1GEiSxQgSDeKSaLYa0eo=/580x330/smart/filters:format(jpeg):quality(90)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/KRKOINCP7JGR7KWT4HNBDSJPDA.jpg"; 
        itemList.appendChild(clone);
    });

    document.querySelector(".btn.btn-light").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        itemList.replaceChildren();
    });
});

