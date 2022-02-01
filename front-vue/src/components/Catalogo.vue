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

    <main v-else-if="data.total > 1">

      <div class="row">
        <div class="col-12 my-3 d-flex justify-content-end">
          <div class="form-group">
            <label for="filter">Filtros: </label>
            <select class="form-control" name="filter" id="filter" v-model="filter">
              <option value="min">Menor valor</option>
              <option value="max">Maior valor</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
        <div v-for="product in data.data" :key="product.id" class="col mt-3">
          <div class="card mb-4 rounded-3 shadow-sm h-100">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">{{ product.name }}</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">
                {{ new Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(product.value) }}
              </h1>
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
        <paginacao :data="data" @pagination-change-page="getProducts">
          <span slot="prev-nav">&lt; Previous</span>
          <span slot="next-nav">Next &gt;</span>
        </paginacao>
      </div>

    </main>

  </div>
</template>

<script>
import paginacao from 'laravel-vue-pagination';

export default {
  name: 'Catalogo',
  components: {
    paginacao
  },
  data() {
    return {
      data: {},
      filter: false,
      error: false,
    }
  },

  methods: {
    getProducts(page = 1) {
      this.$store.dispatch('getProducts', 
        { route: 'product', params: {
          page,
          value: this.filter
        } })
      .then(res => {
         this.data = res;
      })
      .catch(err => {
        if(err.data) {
          this.error = err.data;
        } else {
          this.error = err;
        }
      })
    }
  },

  mounted() {
     this.getProducts();
  },

  watch: {
    filter: function () {
      this.getProducts();
    }
  }
}
</script>
