
let newDes = '';

let des = document.querySelectorAll('.des');
des.forEach(i => {
    if (i.innerHTML.length > 50) {
        newDes = i.innerHTML.slice(0, 49)
    }

    i.innerHTML = newDes + "...";
})

let cost = document.querySelectorAll('.cost');
let total = 0;
cost.forEach(i => total += parseInt(i.innerHTML));

document.getElementById('total-cost').innerHTML = total;


// alert('asdjhaksd')
function decreaseQuantity(id) {
    var quantityInput = document.querySelector('.quantity-input[data-id="' + id + '"]');
    var currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
    fetch(`/api/cart/update/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ quantity: quantityInput.value })
    }).then(response => response.json())
        .then(response => {
            // Update the quantity innerHTML on the page
            let price = document.querySelector(`.price[data-id="${id}"]`);
            price = parseInt(price.innerHTML);
            console.log(price * quantityInput.value)

            document.querySelector(`.cost[data-id="${id}"]`).innerHTML = (price * quantityInput.value)
            let cost = document.querySelectorAll('.cost');
            let total = 0;
            cost.forEach(i => total += parseInt(i.innerHTML));

            document.getElementById('total-cost').innerHTML = total;
        }).catch(e => console.error(e));
}

function increaseQuantity(id) {
    var quantityInput = document.querySelector('.quantity-input[data-id="' + id + '"]');
    var currentValue = parseInt(quantityInput.value);

    quantityInput.value = currentValue + 1;

    fetch(`/api/cart/update/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ quantity: quantityInput.value })
    }).then(response => response.json())
        .then(response => {
            // Update the quantity innerHTML on the page

            let price = document.querySelector(`.price[data-id="${id}"]`);
            price = parseInt(price.innerHTML);
            console.log(price * quantityInput.value)

            document.querySelector(`.cost[data-id="${id}"]`).innerHTML = (price * quantityInput.value)

            let cost = document.querySelectorAll('.cost');
            let total = 0;
            cost.forEach(i => total += parseInt(i.innerHTML));

            document.getElementById('total-cost').innerHTML = total;
        }).catch(e => console.error(e));

}


function handleChangeValue(id) {
    var quantityInput = document.querySelector('.quantity-input[data-id="' + id + '"]');
    var currentValue = parseInt(quantityInput.value);
    fetch(`/api/cart/update/${id}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ quantity: currentValue })
    }).then(response => response.json())
        .then(response => {
            // Update the quantity innerHTML on the page
            let price = document.querySelector(`.price[data-id="${id}"]`);
            price = parseInt(price.innerHTML);
            console.log(price * quantityInput.value)

            document.querySelector(`.cost[data-id="${id}"]`).innerHTML = (price * quantityInput.value)
            let cost = document.querySelectorAll('.cost');
            let total = 0;
            cost.forEach(i => total += parseInt(i.innerHTML));

            document.getElementById('total-cost').innerHTML = total;
        }).catch(e => console.error(e));
    console.log(id)
}

function handleDeleteCart(id) {
    if (confirm('Are you sure you want to delete')) {
        fetch('/api/cart/' + id)
            .then(response => response.json())
            .then(response => {
                if (response.ok) {
                    console.log("Successfully deleted")
                    let row = document.querySelector(`.cart-list[data-id="${id}"]`)
                    if (row) {
                        row.remove();
                    }

                }
            }).catch(e => console.error(e));
    }

}