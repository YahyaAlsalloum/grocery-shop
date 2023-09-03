<template>
  <div class="home">

    <div class="card" style="width: 18rem;" v-for="category in categories" :key="category.id">
  <img :src="require(`../assets/${category.img}`)" class="card-img-top" alt="..."  >
  <div class="card-body">
    <h5 class="card-title">{{ category.name }}</h5>
    <p class="card-text"></p>
    <div class="buttons" style="  display: flex;
  justify-content: space-evenly;">
    <RouterLink to="params" class="btn btn-success">مشاهده</RouterLink>
    <RouterLink to="" class="btn btn-dark">اضافه</RouterLink>
  </div>
  </div>
</div>

    
  
  </div>
</template>

<script>
import { RouterLink } from 'vue-router';

export default {
    name: "admin_page",
    props: {
        categories: {
            type: Array,
            required: true,
            default: () => [
                { id: 0, name: "بقاله", img: "cart-supermarket.avif" },
                { id: 1, name: "معلبات", img: "cans-isolated-white.avif" },
                { id: 2, name: "بقول", img: "dry-legumes.avif" },
                { id: 3, name: "خضار و فواكه", img: "vegetables.avif" },
                { id: 4, name: "مشروبات", img: "drinks-cans-bottles.avif" },
                { id: 5, name: "دخان", img: "tobacco.avif" },
                { id: 6, name: "منظفات", img: "cleaning-house-basket.avif" },
                { id: 7, name: "مجمدات", img: "frozen-food.avif" },
                { id: 8, name: "مخللات", img: "pickles.avif" },
                { id: 9, name: "شوكولا و بسكويت", img: "chocolate-cookies.avif" },
                { id: 10, name: "شبس", img: "chips.avif" },
            ],
        },
    },
    components: { RouterLink }
};
</script>
<style>
.home{
  
  display: flex;
  justify-content: center;
  flex-wrap: wrap;

}
.home .card{
  margin: 10px;
  width: 300px;
}
.home .card img {
  width: 100%;
  height: 75%;
}
</style>