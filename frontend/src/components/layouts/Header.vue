<script setup>
import Navbar from "./Navbar.vue";
</script>
<template>
  <!-- TopBar Start -->
  <!-- <TopBar></TopBar> -->
  <!-- TopBar End -->
  <!-- Navbar Start -->
  <div class="container-fluid">
    <div class="row border-top px-xl-5">
      <div class="col-lg-3 d-none d-lg-block">
        <a
          class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
          data-toggle="collapse"
          href="#navbar-vertical"
          style="height: 65px; margin-top: -1px; padding: 0 30px"
        >
          <h6 class="m-0">Danh mục</h6>
          <i class="fa fa-angle-down text-dark"></i>
        </a>
        <nav
          class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
          id="navbar-vertical"
          style="width: calc(100% - 30px); z-index: 1"
        >
          <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
            <div class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown"
                >Quần áo <i class="fa fa-angle-down float-right mt-1"></i
              ></a>
              <div
                class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0"
              >
                <a href="" class="dropdown-item">Quân áo nam</a>
                <a href="" class="dropdown-item">Quân áo nữ</a>
                <a href="" class="dropdown-item">Quân áo em bé</a>
              </div>
            </div>
            <a href="" class="nav-item nav-link">Áo sơ mi</a>
            <a href="" class="nav-item nav-link">Quần jeans</a>
            <a href="" class="nav-item nav-link">Đồ bơi</a>
            <a href="" class="nav-item nav-link">Đồ ngủ</a>
            <a href="" class="nav-item nav-link">Đồ thể thao</a>
            <a href="" class="nav-item nav-link">Đồ bay</a>
            <a href="" class="nav-item nav-link">Áo blazer</a>
            <a href="" class="nav-item nav-link">Áo khoác</a>
            <a href="" class="nav-item nav-link">Giày</a>
          </div>
        </nav>
      </div>
      <div class="col-lg-9">
        <!-- Navbar start -->
        <Navbar></Navbar>
        <!-- Navbar start -->
      </div>
    </div>
  </div>
  <!-- Navbar End -->
  <!-- Page Header Start -->
</template>