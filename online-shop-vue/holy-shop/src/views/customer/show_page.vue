<template>
  <div class="container">
    <div class="card" style="width: 18rem;" v-for="item in items" :key="item.id">
  <img :src="require(`../assets/${item.img}`)" class="card-img-top" alt="..."  >
  <div class="card-body">
    <h5 class="card-title">{{ item.name }}</h5>
    <p class="card-text">{{ item.price }}</p>
    <small>{{ item.description }}</small>
    <div class="buttons" style="  display: flex;justify-content: space-evenly;">
    <button v-on="addToCart(item.id,item.name,item.price)" class="btn btn-dark"> {{ cart.counter }} اضافه الى السله</button>
  </div>
  </div>
</div>
</div>
</template>
<script>
import axios from "axios";
import cart from '../components/cart_page.vue'

export default
{
  name:"show_page",
  data()
  {
    return {items:[],}
  },
  created()
  {
    this.getProducts();
  },
  methods:{
    async getProducts(){
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/products');
        this.items=response.data;
      } catch (error) {
        console.log(error);
      }
    },
    addToCart(id,name,price){
      const newItem = { id, name, price };

      cart.cart_m.push(newItem);    
      cart.counter++ ;
    }

  },

}
</script>