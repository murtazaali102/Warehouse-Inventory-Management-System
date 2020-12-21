<head>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="./libs/css/main.css" />

</head>
<ul>
  <li class="admin-topmenu">
    <a href="admin.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="admin-menu">
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>User Management</span>
    </a>
    <ul class="nav submenu">
      <li><a href="group.php">Manage Groups</a> </li>
      <li><a href="users.php">Manage Users</a> </li>
   </ul>
  </li>
  <li class="admin-menu">
    <a href="categorie.php" >
      <i class="glyphicon glyphicon-indent-left"></i>
      <span>Categories</span>
    </a>
  </li>
  <li class="admin-menu">
    <a href="#" class="submenu-toggle">
      <i class="fa fa-shopping-cart"></i>
      <span>Products</span>
    </a>
    <ul class="nav submenu">
       <li><a href="product.php">Manage products</a> </li>
       <li><a href="add_product.php">Add product</a> </li>
   </ul>
  </li>
  <li class="admin-menu">
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span>Medias</span>
    </a>
  </li>
  <li class="admin-menu">
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span>Sales</span>
      </a>
      <ul class="nav submenu">
         <li><a href="sales.php">Manage Sales</a> </li>
         <li><a href="add_sale.php">Add Sale</a> </li>
     </ul>
  </li>
  <li class="admin-menu">
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
       <span>Sales Report</span>
      </a>
      <ul class="nav submenu">
        <li><a href="sales_report.php">Sales by dates </a></li>
        <li><a href="monthly_sales.php">Monthly sales</a></li>
        <li><a href="daily_sales.php">Daily sales</a> </li>
      </ul>
  </li>
</ul>
