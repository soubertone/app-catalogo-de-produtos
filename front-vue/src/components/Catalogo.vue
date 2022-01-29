<template>
  <div class="container py-3">
    <header>
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
          <span class="fs-4">Catalogo de produtos</span>
        </a>
      </div>
    </header>

    <div v-if="error" class="alert alert-danger" role="alert">
      <strong>{{ error }}</strong>
    </div>

    <main v-else-if="products.length > 1">

      <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
        <div v-for="product in products" :key="product.id" class="col mt-3">
          <div class="card mb-4 rounded-3 shadow-sm h-100">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">{{ product.name }}</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$ {{ product.value }}</h1>
              <p class="list-unstyled mt-3 mb-4 small">
                {{ product.description }}
              </p>
              <ul v-for="inventory in product.inventory" :key="inventory.id" class="nav navbar-nav list-inline d-inline">
                <li class="list-inline-item p-1 mb-3">
                  <button class="btn btn-sm btn-outline-primary">{{ inventory.size }}</button>
                </li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-success">Adicionar ao carrinho</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container d-flex justify-content-center mt-2">
        <pagination :data="products" @pagination-change-page="getProducts"></pagination>
      </div>

    </main>

  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'Catalogo',
  data() {
    return {
      products: [],
      filter: false,
      error: false,
    }
  },

  methods: {
    getProducts(page = 1) {
      axios.get('http://localhost/api/product?page=' + page).then(response => {
        this.products = response.data.data.data;
      }).catch(err => {
        this.error = err.data
      })
    }
  },

  mounted() {
     this.getProducts()
  },
}
</script>

<style scoped>

</style>
