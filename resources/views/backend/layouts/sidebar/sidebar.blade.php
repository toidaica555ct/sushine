  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
    </button>
  </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="treeview active">
            <a href="#">
                <i class="fa fa-table"></i> <span>Danh mục</span>
                <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
              </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{route('loai.index')}}"><i class="fa fa-circle-o"></i> Danh sách loại sản phẩm</a></li>
                <li><a href="{{route('chude.index')}}"><i class="fa fa-circle-o"></i>Danh sách chủ đề</a></li>
                <li><a href="{{route('sanpham.index')}}"><i class="fa fa-circle-o"></i>Danh sách sản phẩm</a></li>
            </ul>
        </li>
        <li class="header">Cảnh báo</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
</section>
<!-- /.sidebar -->