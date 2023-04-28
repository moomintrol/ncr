document.addEventListener("DOMContentLoaded", () => {
  let productsConteiner = document.querySelector(".product-tables");
  let productStatus = document.querySelectorAll("[name='btn-status']");
  let products = [];
  
  //загружаем все карточки с товарами
  getProducts("all");

  productStatus.forEach((item) => {
    item.addEventListener("click", async (e) => {
      await getProducts(e.currentTarget.dataset.statusId);
    });
  });

  //создаём функцию для загрузки данных
  async function getProducts(status) {
    //формируем параметр
    const param = new URLSearchParams();
    param.append("status_id", status);

    products = await getData("/app/admin/tables/search.check.php", param);
    //выведим полученные данные на страницу
    outOnPage(products);
  }

  function outOnPage(product) {
    productsConteiner.innerHTML = ``;
    product.forEach((item) => {
      productsConteiner.insertAdjacentHTML("beforeend", createCard(item));
    });
  }

  //создаём карточку товара
  function createCard({ model, body, number, satus_car }) {
    return `<tr>
        <td>${model} ${body}</td>
        <td>${number}</td>
        <td>${satus_car}</td>
    </tr>`;
  }
});
