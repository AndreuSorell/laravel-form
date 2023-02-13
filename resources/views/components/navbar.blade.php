
<style>
    /* Add a black background color to the top navigation */
.topnav {
  background-color: white;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: white;
  color: black;
}
</style>

<div class="topnav">
  <a class="active" href="{{ route('posts.create') }}">Crear</a>
  <a href="{{ route('posts.index') }}">Posts</a>
    <a href="{{ route('dashboard') }}">Inicio</a>
  </div>