<template>
  <div class="container category">
    <div class="justify-content-center">
      <h5 class="text-center">{{ $t('covid19.services_description')}}</h5>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist" ref="formContainer">
      <li class="nav-item">
        <a
          class="nav-link active"
          id="all-tab"
          data-toggle="tab"
          href="#all"
          role="tab"
          aria-controls="all"
          aria-selected="true"
        >{{ $t('covid19.all')}}</a>
      </li>
      <li class="nav-item" v-for="(item) in main" :key="item.id">
        <a
          class="nav-link"
          :id="(item.name.replace(/ .*/,'')+item.id)+'-tab'"
          data-toggle="tab"
          :href="'#'+(item.name.replace(/ .*/,'')+item.id)"
          role="tab"
          :aria-controls="item.name"
          aria-selected="true"
        >{{item.name}}</a>
      </li>

      <li class="nav-item dropdown" v-if="Array.isArray(others) && others.length != 0">
        <a
          class="nav-link dropdown-toggle"
          data-toggle="dropdown"
          href="#"
          role="button"
          aria-haspopup="true"
          aria-expanded="false"
        >{{ $t('covid19.more')}}</a>
        <div class="dropdown-menu">
          <a
            v-for="(other) in others"
            :key="other.id"
            class="dropdown-item"
            :id="(other.name.replace(/ .*/,'')+other.id)+'-tab'"
            data-toggle="tab"
            :href="'#'+(other.name.replace(/ .*/,'')+other.id)"
            role="tab"
          >{{other.name}}</a>
        </div>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
        <CardService :category_id="null"></CardService>
      </div>
      <div
        v-for="(item) in main"
        :key="item.id"
        class="tab-pane fade"
        :id="(item.name.replace(/ .*/,'')+item.id)"
        role="tabpanel"
        :aria-labelledby="(item.name.replace(/ .*/,'')+item.id)+'-tab'"
      >
        <CardService :category_id="item.id"></CardService>
      </div>
      <div
        v-for="(other) in others"
        :key="other.id"
        class="tab-pane fade"
        :id="(other.name.replace(/ .*/,'')+other.id)"
        role="tabpanel"
        :aria-labelledby="(other.name.replace(/ .*/,'')+other.id)+'-tab'"
      >
        <CardService :category_id="other.id"></CardService>
      </div>
    </div>
  </div>
</template>




<script>
import CardService from "./CardService";
export default {
  components: { CardService },
  mounted() {
    this.getCategories();
  },

  data() {
    return {
      main: [],
      others: []
    };
  },
  methods: {
    getCategories() {
      let loader = this.$loading.show({
        color: "#a12e35",
        loader: "dots",
        container: this.$refs.formContainer,
        canCancel: false
      });
      axios
        .get("/api/categories", {
          params: {
            lang: document.documentElement.lang.substr(0, 2),
            page: this.page
          }
        })
        .then(response => {
          if (response.data.success) {
            this.main = response.data.main;
            this.others = response.data.others;
          }
        })
        .finally(() => {
          loader.hide();
        });
    }
  },

  computed: {}
};
</script>