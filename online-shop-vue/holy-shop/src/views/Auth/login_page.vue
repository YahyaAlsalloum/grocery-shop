<template>
  <form>
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="password" class="form-control" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</template>

<script>
export default {
  name: "login_page" ,

}
</script>