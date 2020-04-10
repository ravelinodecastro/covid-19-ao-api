<template>
  <div>
    <div class="row ads" ref="formContainer">
      <div class="col-md-4 mb-5" v-for="(service) in services" :key="service.id">
        <div class="card rounded">
          <div class="card-image">
            <span class="card-notify-badge">{{service.category}}</span>

            <img class="img-ad" :src="'/storage/services/'+service.image" :alt="service.name" />
          </div>

          <div class="card-body text-center">
            <div class="ad-title m-auto">
              <h5>{{service.name}}</h5>
            </div>
            <div
              class="description"
              data-toggle="tooltip"
              data-placement="right"
              :title="service.description"
            >{{service.description}}</div>
            <div class="row">
              <a
                class="ad-btn"
                target="_blank"
                :href="service.android"
                v-if="service.android"
              >Android</a>
              <a class="ad-btn" target="_blank" :href="service.ios" v-if="service.ios">IOS</a>
              <a class="ad-btn" target="_blank" :href="service.web" v-if="service.web">Web</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <infinite-loading class="p-4" @infinite="getServices" force-use-infinite-wrapper="false">
      <div class="font-weight-bold" slot="no-results">{{ $t('covid19.no_more_cat')}}.</div>
      <div class="font-weight-bold" slot="no-more">{{ $t('covid19.no_more_serv')}}</div>
      <div class="font-weight-bold" slot="error" slot-scope="{ trigger }">
        {{ $t('covid19.failed')}}.
        <a
          href="javascript:;"
          @click="trigger"
        >{{ $t('covid19.tryagain')}}.</a>
      </div>
    </infinite-loading>
    <go-top bg-color="#fff" fg-color="#a12e35" :size="50" :right="50"></go-top>
  </div>
</template>




<script>
import GoTop from "@inotom/vue-go-top";
export default {
  components: { GoTop },
  mounted() {
    this.getServices();
  },

  data() {
    return { page: 1, services: [] };
  },
  props: ["category_id"],
  methods: {
    getServices($state={loaded(){}, complete(){}}) {
      /* let loader = this.$loading.show({
        color: "#880e4f",
        loader: "dots",
        container: this.$refs.formContainer,
        canCancel: false
      });*/
      axios
        .get(
          "/api/services/" +
            (this.category_id ? this.category_id : "") +
            "?lang=" +
            document.documentElement.lang.substr(0, 2),
          {
            params: {
              page: this.page
            }
          }
        )
        .then(({ data }) => {
          if (data.success && data.data.data.length) {
            this.page += 1;
            //this.services.push(...data.data.data);
            let array = this.services;
            array.push(...data.data.data);
            this.services = _.uniqBy(array, "id");
            $state.loaded();
          } else {
            $state.complete();
          }
        })
        .finally(() => {
          // loader.hide();
          $state.complete();
          $('[data-toggle="tooltip"]').tooltip();
        });
    }
  },

  computed: {}
};
</script>