
  <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
  <div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
    <ul class="br-sideleft-menu">
      <li class="br-menu-item">
        <a href="{{ route('dashboard') }}" class="br-menu-link active">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">Dashboard</span>
        </a><!-- br-menu-link -->
      </li><!-- br-menu-item -->


      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Product Infomation</label>
      <!-- Manage Brand Start -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Manage Brand</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('manageBrand') }}" class="sub-link">All Brand</a></li>
          <li class="sub-item"><a href="{{ route('createBrand') }}" class="sub-link">Add New Brand</a></li>
        </ul>
      </li>
      <!-- Manage Brand End -->

      <!-- Manage Category Start -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Manage Category</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ route('manageCategory') }}" class="sub-link">All Category</a></li>
          <li class="sub-item"><a href="{{ route('createCategory') }}" class="sub-link">Add New Category</a></li>
          {{-- <li class="sub-item"><a  class="sub-link">All Category</a></li>
          <li class="sub-item"><a  class="sub-link">Add New Category</a></li> --}}
        </ul>
      </li>
      <!-- Manage Category End -->

      <!-- Manage Category Start -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Manage Product</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          {{-- <li class="sub-item"><a href="{{ route('manageProduct') }}" class="sub-link">All Products</a></li>
          <li class="sub-item"><a href="{{ route('createProduct') }}" class="sub-link">Add New Product</a></li> --}}
          <li class="sub-item"><a  class="sub-link">All Products</a></li>
          <li class="sub-item"><a  class="sub-link">Add New Products</a></li>
        </ul>
      </li>
      <!-- Manage Category End -->


      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage Location</label>
      <!-- Manage Category Start -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Manage Division</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          {{-- <li class="sub-item"><a href="{{ route('manageDivision') }}" class="sub-link">All Division</a></li>
          <li class="sub-item"><a href="{{ route('createDivision') }}" class="sub-link">Add New Division</a></li> --}}

          <li class="sub-item"><a  class="sub-link">All Division</a></li>
          <li class="sub-item"><a  class="sub-link">Add New Division</a></li>
        </ul>
      </li>
      <!-- Manage Category End -->


      <!-- Manage Category Start -->
      <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
          <span class="menu-item-label">Manage District</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          {{-- <li class="sub-item"><a href="{{ route('manageDistrict') }}" class="sub-link">All District</a></li>
          <li class="sub-item"><a href="{{ route('createDistrict') }}" class="sub-link">Add New District</a></li> --}}

          <li class="sub-item"><a  class="sub-link">All District</a></li>
          <li class="sub-item"><a  class="sub-link">Add New District</a></li>
        </ul>
      </li>
      <!-- Manage Category End -->






    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage Order</label>



    <br>
  </div><!-- br-sideleft -->
