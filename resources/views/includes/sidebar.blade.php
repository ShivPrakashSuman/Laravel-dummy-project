
<style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 250px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px 50px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>

<div class="sidebar">
  <a  href="#home">Home</a>
  <a href="/user">User</a>
  <a class="active" href="/product">Product</a>
  <a href="/category">Category </a>
  <a href="/brand">Brand </a>
  <a href="/order">Order  </a>
  <a href="/curl"> Pixabay </a>
  <a href="/curl/dragdrop"> jQuery Drag-Drop </a>
  <a href="/logout"> Logout </a>
</div>
<script>
  let base_url = window.location.pathname;
    console.log('url-',base_url);
</script>