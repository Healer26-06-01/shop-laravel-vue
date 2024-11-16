<script setup>
import { ref, watch } from "vue";
import { useRouter } from "vue-router";
import PageHeader from "../../components/layouts/PageHeader.vue";

const router = useRouter();
const topBarSearch = ref();

watch(topBarSearch, () => {
  router.push({ name: "search", params: { search: topBarSearch.value } });
});
</script>
<template>
  <div>
    <!-- Page Header Start -->
    <PageHeader pageName="404!"></PageHeader>
    <!-- Page Header End -->
    <!-- Content Wrapper. Contains page content -->
    <div class="container mt-5 mb-5 px-5">
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2"></div>
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content mt-5 mb-5 px-5">
          <div class="error-page">
            <h2 class="headline text-warning">404</h2>
            <div class="error-content">
              <h3>
                <i class="fas fa-exclamation-triangle text-warning"></i>
                Oops! Không tìm thấy trang.
              </h3>
              <p>
                Chúng tôi không thể tìm thấy trang bạn đang tìm kiếm. Trong khi
                đó, bạn có thể
                <RouterLink :to="{ name: 'home' }"
                  ><a href="../../index.html"
                    >quay lại bảng điều khiển</a
                  ></RouterLink
                >

                hoặc thử sử dụng biểu mẫu tìm kiếm.
              </p>
              <form @submit.prevent class="search-form py-5">
                <div class="input-group">
                  <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Tìm kiếm..."
                    v-model.lazy="topBarSearch"
                  />
                  <div class="input-group-append">
                    <button type="submit" name="submit" class="btn btn-warning">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
                <!-- /.input-group -->
              </form>
            </div>
            <!-- /.error-content -->
          </div>
          <!-- /.error-page -->
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- /.content-wrapper -->
  </div>
</template>
