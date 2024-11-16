<script setup>
import { onMounted, ref, watch } from "vue";
import PageHeader from "../../components/layouts/PageHeader.vue";
import useRefresh from "../../stores/Refresh";
import { storeToRefs } from "pinia";
import useAlert from "../../services/alert";
import useCart from "../../services/cart";
import useWishlist from "../../services/wishlist";
import { useRouter } from "vue-router";

const router = useRouter();
const { refreshWishlistPage } = storeToRefs(useRefresh());
const wishlist = ref();

// Get user's wishlist.
onMounted(() => {
  wishlist.value = JSON.parse(localStorage.getItem("productAttributes"));

  if (wishlist.value == null || wishlist.value.length == 0) {
    useAlert()
      .centerDialogAlert("info", "Your wishlist is empty")
      .then((result) => {
        router.back();
      });
  }
});

// Retrieve wishlists when users update or delete.
watch(refreshWishlistPage, () => {
  wishlist.value = JSON.parse(localStorage.getItem("productAttributes"));

  if (wishlist.value.length == 0) {
    useAlert()
      .centerDialogAlert("info", "Your wishlist is empty")
      .then((result) => {
        router.back();
      });
  }
});
</script>
<template>
  <div>
    <!-- Page Header Start -->
    <PageHeader pageName="DANH SÁCH YÊU THÍCH"></PageHeader>
    <!-- Page Header End -->
    <!-- Cart Start -->
    <div v-if="wishlist" class="container-fluid pt-5">
      <div class="row px-xl-5">
        <div class="col-lg-12 table-responsive mb-5">
          <table class="table table-bordered text-center mb-0">
            <thead class="bg-secondary text-dark">
              <tr>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody class="align-middle">
              <template v-for="(data, key) in wishlist" :key="key">
                <tr>
                  <td class="align-middle">
                    <img :src="data.image" alt="image" style="width: 50px" />
                  </td>
                  <td class="align-middle">{{ data.name }}</td>
                  <td class="align-middle">
                    {{ data.salePrice }}
                  </td>
                  <td class="align-middle">
                    <button
                      @click="useWishlist().deleteWishlist(data.id)"
                      class="btn btn-sm btn-primary mx-2"
                    >
                      <i class="fa fa-times"></i>
                    </button>
                    <button
                      @click="useCart().addCart(data.id)"
                      class="btn btn-sm btn-primary mx-2"
                    >
                      Thêm vào giỏ hàng
                      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </button>
                  </td>
                </tr>
              </template>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Cart End -->
  </div>
</template>
