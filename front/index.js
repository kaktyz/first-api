async function getOrders() {

    let res = await fetch('http://127.0.0.1/orders');
    // let res = await fetch('https://jsonplaceholder.typicode.com/posts');
    let orders = await res.json();

    // Выводим заказы в виде карт
    orders.forEach(order => {
        document.querySelector('.post-list').innerHTML += `
        <div class="card">
            <div class="card-body">${order.id}</div>
        </div>
        `
    });

}
getOrders(); 

