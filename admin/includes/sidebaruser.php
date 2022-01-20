


<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/images/Portrait_Placeholder.png" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block"><span id="user_fullname"></span></a>
    </div>
  </div>

<script>
   fetch(`includes/app/user.php?request=find_user&id=<?php echo $_SESSION['username']?>`)
   .then(data => data.json())
   .then(data => document.querySelector("#user_fullname").innerHTML = data.hasOwnProperty("list") ? data.list.Name : "")
</script>
  