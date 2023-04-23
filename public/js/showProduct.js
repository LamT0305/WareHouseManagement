function decreaseQuantity() {
    var quantityInput = document.querySelector('.quantity-input');
    var currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}

function increaseQuantity() {
    var quantityInput = document.querySelector('.quantity-input');
    var currentValue = parseInt(quantityInput.value);

    quantityInput.value = currentValue + 1;

}

fetch('/api/product')
    .then(response => response.json())
    .then(products => {

        // Get the first 5 elements of the products array
        const firstFiveProducts = products.slice(0, 9);

        let productsHtml = '';
        firstFiveProducts.forEach(product => {
            productsHtml += `
                <div class="col-pre">
                    <div class="card-body pre">
                        <img src="${product.image_url}"/>
                        <a href="/product/${product.id}"><p>${product.name}</p></a>
                        <p>${product.description}</p>
                        <p>${product.price}</p>
                        <p>${product.quantity}</p>
                    </div>
                </div>                        
            `;
        });
        document.querySelector('#preview').innerHTML = productsHtml;
    })
    .catch(error => console.error(error)); 