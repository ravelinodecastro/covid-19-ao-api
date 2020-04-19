<template>
  <div>
    <div class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('dashboard')">
        <icon
          name="dashboard"
          class="w-4 h-4 mr-2"
          :class="isUrl('') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'"
        />
        <div
          :class="isUrl('') ? 'text-white' : 'text-indigo-300 group-hover:text-white'"
        >Página Inicial</div>
      </inertia-link>
    </div>
    <div class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('services')">
        <icon
          name="office"
          class="w-4 h-4 mr-2"
          :class="isUrl('services') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'"
        />
        <div
          :class="isUrl('services') ? 'text-white' : 'text-indigo-300 group-hover:text-white'"
        >Serviços</div>
      </inertia-link>
    </div>

    <div class="mb-4">
      <inertia-link class="flex items-center group py-3" :href="route('configs')">
        <icon
          name="office"
          class="w-4 h-4 mr-2"
          :class="isUrl('configs') ? 'fill-white' : 'fill-indigo-400 group-hover:fill-white'"
        />
        <div
          :class="isUrl('configs') ? 'text-white' : 'text-indigo-300 group-hover:text-white'"
        >Configurações</div>
      </inertia-link>
    </div>
  </div>
</template>

<script>
import Icon from "@/admin/Shared/Icon";

export default {
  components: {
    Icon
  },
  props: {
    url: String
  },
  methods: {
    isUrl(...urls) {
      if (urls[0] === "") {
        return this.url === "";
      }

      return urls.filter(url => this.url.startsWith(url)).length;
    }
  }
};
</script>
