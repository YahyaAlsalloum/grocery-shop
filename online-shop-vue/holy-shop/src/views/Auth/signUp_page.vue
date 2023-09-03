<template>
    <form>
      <div class="mb-3">
      <label  class="form-label"> name</label>
      <input type="text"  class="form-control" placeholder=" name">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label  class="form-label">Re-Password</label>
    <input type="password" class="form-control" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</template>

<script>
export default {
  name: "signUp_page" ,

}
</script>