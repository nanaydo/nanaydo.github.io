document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".btn.btn-primary").addEventListener("click", event => {
        fetch('https://rickandmortyapi.com/api/character')
            .then((response) => {
                if (!response.ok) {
                    throw new Error('HTTP error! status: ${response.status}');
                }
                return response.json();
            })
            .then((response) => {
                var itemList = document.getElementById("my-list");
                var template = document.getElementById("list-template");
                response.results.forEach(element => {
                    var clone = template.content.cloneNode(true);
                    clone.querySelector(".col-xs-12").setAttribute("data-detail", element.id);
                    clone.querySelector("[data-id='name']").textContent = element.name;
                    clone.querySelector("[data-id='status']").textContent = element.status;
                    clone.querySelector("[data-id='species']").textContent = element.species;
                    clone.querySelector("[data-id='image']").src = element.image;
                    itemList.appendChild(clone);
                });
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });

    document.querySelector(".btn.btn-light").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        itemList.replaceChildren();
    });
});


