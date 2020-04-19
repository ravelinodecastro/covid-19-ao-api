<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Serviços</h1>
    <div class="mb-6 flex justify-between items-center">
      <search-filter v-model="form.search" class="w-full max-w-md mr-4" @reset="reset"></search-filter>
      <inertia-link class="btn-indigo" :href="route('services.create')">
        <span>Cadastrar</span>
        <span class="hidden md:inline">Serviços</span>
      </inertia-link>
    </div>
    <div class="bg-white rounded shadow overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <tr class="text-left font-bold">
          <th class="px-6 pt-6 pb-4">Nome</th>
          <th class="px-6 pt-6 pb-4">Descrição</th>
          <th class="px-6 pt-6 pb-4">Web</th>
          <th class="px-6 pt-6 pb-4">Android</th>
          <th class="px-6 pt-6 pb-4">IOS</th>
        </tr>
        <tr
          v-for="service in services.data"
          :key="service.id"
          class="hover:bg-gray-100 focus-within:bg-gray-100"
        >
          <td class="border-t">
            <inertia-link
              class="px-6 py-4 flex items-center focus:text-indigo-500"
              :href="route('services.edit', service.id)"
            >{{ service.name }}</inertia-link>
          </td>
          <td class="border-t">
            <inertia-link
              class="px-6 py-4 flex items-center"
              :href="route('services.edit', service.id)"
              tabindex="-1"
            >{{ service.description }}</inertia-link>
          </td>
          <td class="border-t">
            <inertia-link
              class="px-6 py-4 flex items-center"
              :href="route('services.edit', service.id)"
              tabindex="-1"
            >{{ service.web }}</inertia-link>
          </td>
          <td class="border-t">
            <inertia-link
              class="px-6 py-4 flex items-center"
              :href="route('services.edit', service.id)"
              tabindex="-1"
            >{{ service.android }}</inertia-link>
          </td>
          <td class="border-t">
            <inertia-link
              class="px-6 py-4 flex items-center"
              :href="route('services.edit', service.id)"
              tabindex="-1"
            >{{ service.ios }}</inertia-link>
          </td>
          <td class="border-t w-px">
            <inertia-link
              class="px-4 flex items-center"
              :href="route('services.edit', service.id)"
              tabindex="-1"
            >
              <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" />
            </inertia-link>
          </td>
        </tr>
        <tr v-if="services.data.length === 0">
          <td class="border-t px-6 py-4" colspan="4">Serviço não encontrado.</td>
        </tr>
      </table>
    </div>
    <pagination :links="services.links" />
  </div>
</template>

<script>
import Icon from "@/admin/Shared/Icon";
import Layout from "@/admin/Shared/Layout";
import mapValues from "lodash/mapValues";
import Pagination from "@/admin/Shared/Pagination";
import pickBy from "lodash/pickBy";
import SearchFilter from "@/admin/Shared/SearchFilter";
import throttle from "lodash/throttle";

export default {
  metaInfo: { title: "Serviços" },
  layout: Layout,
  components: {
    Icon,
    Pagination,
    SearchFilter
  },
  props: {
    services: Object,
    filters: Object
  },
  data() {
    return {
      form: {
        search: this.filters.search
      }
    };
  },
  watch: {
    form: {
      handler: throttle(function() {
        let query = pickBy(this.form);
        this.$inertia.replace(
          this.route(
            "services",
            Object.keys(query).length ? query : { remember: "forget" }
          )
        );
      }, 150),
      deep: true
    }
  },
  methods: {
    reset() {
      this.form = mapValues(this.form, () => null);
    }
  }
};
</script>
