<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('product') }}'><i class='nav-icon la la-dropbox'></i> Products</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('subproduct') }}'><i class='nav-icon la la-question'></i> Subproducts</a></li> -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-group"></i> Blogs</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('blog') }}"><i class="nav-icon la la-stack-exchange"></i> <span>Add Blog</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('blogcategory') }}"><i class="nav-icon la la-th"></i> <span>Add Category</span></a></li>

    </ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('casestudies') }}'><i class='nav-icon la la-pencil-square-o'></i> Casestudies</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('news') }}'><i class='nav-icon la la-leanpub'></i> News</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('contacts') }}'><i class='nav-icon la la-envelope'></i> Contacts</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('demos') }}'><i class='nav-icon la la-user-plus'></i> Demos</a></li>