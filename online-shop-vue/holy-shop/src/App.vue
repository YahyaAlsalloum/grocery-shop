


<template>
<div >
<HelloWorld/>
<HomeView/>
<router-view></router-view>
</div>
</template>

<script>
import HomeView from './views/HomeView.vue';
import HelloWorld from './components/HelloWorld.vue';

export default {
  name :'App',
  components :{
    HomeView,HelloWorld,
  }
}

</script>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

body{
  background-color: #271c36;
  color: FFF;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}
</style>
