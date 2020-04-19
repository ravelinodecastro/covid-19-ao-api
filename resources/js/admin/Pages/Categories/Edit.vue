<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link
        class="text-indigo-400 hover:text-indigo-600"
        :href="route('categories')"
      >Serviços</inertia-link>
      <span class="text-indigo-400 font-medium">/</span>
      {{ form.name }}
    </h1>
    <trashed-message
      v-if="category.deleted_at"
      class="mb-6"
      @restore="restore"
    >Seviço eliminado com sucesso.</trashed-message>
    <div class="bg-white rounded shadow overflow-hidden max-w-3xl">
      <form @submit.prevent="submit">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input
            v-model="form.name"
            :errors="$page.errors.name"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Nome"
          />
        </div>
        <div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex items-center">
          <button
            v-if="!category.deleted_at"
            class="text-red-600 hover:underline"
            tabindex="-1"
            type="button"
            @click="destroy"
          >Eliminar serviço</button>
          <loading-button
            :loading="sending"
            class="btn-indigo ml-auto"
            type="submit"
          >Actualizar serviço</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Icon from "@/admin/Shared/Icon";
import Layout from "@/admin/Shared/Layout";
import LoadingButton from "@/admin/Shared/LoadingButton";
import SelectInput from "@/admin/Shared/SelectInput";
import TextInput from "@/admin/Shared/TextInput";
import TrashedMessage from "@/admin/Shared/TrashedMessage";

export default {
  metaInfo() {
    return { title: this.form.name };
  },
  layout: Layout,
  components: {
    Icon,
    LoadingButton,
    SelectInput,
    TextInput,
    TrashedMessage
  },
  props: {
    category: Object,
  },
  remember: "form",
  data() {
    return {
      sending: false,
      form: {
        name: this.category.name
      }
    };
  },
  methods: {
    submit() {
      this.sending = true;
      this.$inertia
        .put(this.route("categories.update", this.category.id), this.form)
        .then(() => (this.sending = false));
    },
    destroy() {
      if (confirm("Are you sure you want to delete this category?")) {
        this.$inertia.delete(this.route("categories.destroy", this.category.id));
      }
    },
    restore() {
      if (confirm("Are you sure you want to restore this category?")) {
        this.$inertia.put(this.route("categories.restore", this.category.id));
      }
    }
  }
};
</script>
