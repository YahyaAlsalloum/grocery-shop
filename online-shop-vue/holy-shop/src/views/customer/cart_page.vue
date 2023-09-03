<template>

<table class="table">
  <thead>
    <tr>
      <th scope="col">الرمز</th>
      <th scope="col">اسم المنتج</th>
      <th scope="col">السعر</th>
      <th>-</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="item in cart" :key="item" >
      <td>{{item.id}}</td>
      <td>{{item.name}}</td>
      <td>{{ item.price }}</td>
      <td><button @click="deleteRow(item.name)" type="button" class="btn btn-danger">حذف</button></td>

    </tr>
    </tbody>
</table>
</template>

<script>
export default {
  name: "cart_page" ,
  cart_m: [] ,counter:0,
   // initial cart state
  methods: {

  },
}
</script>