<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('services')">Serviços</inertia-link>
      <span class="text-indigo-400 font-medium">/</span>
      {{ form.name }}
    </h1>
    <trashed-message
      v-if="service.deleted_at"
      class="mb-6"
      @restore="restore"
    >Seviço eliminado com sucesso.</trashed-message>
    <div class="bg-white rounded shadow overflow-hidden max-w-3xl">
      <form @submit.prevent="submit">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <file-input
          :value="'/storage/services/'+form.image"
            v-model="form.image"
            :errors="$page.errors.image"
            class="pr-6 pb-8 w-full lg:w-1/2"
            type="file"
            accept="image/*"
            label="Imagem"
          />
          <text-input
            v-model="form.name"
            :errors="$page.errors.name"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Nome"
          />
          <text-input
            v-model="form.description"
            :errors="$page.errors.description"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Descrição"
          />
          <select-input
            v-model="form.status"
            :errors="$page.errors.status"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Estado"
          >
            <option :value="null" />
            <option value="1">Activo</option>
            <option value="0">Desactivado</option>
          </select-input>
          <select-input
            v-model="form.category_id"
            :errors="$page.errors.category_id"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Categoria"
          >
            <option :value="null" />
            <option
              v-for="category in categories"
              :key="category.id"
              :value="category.id"
            >{{ category.name }}</option>
          </select-input>
          <text-input
            v-model="form.web"
            :errors="$page.errors.web"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Site"
          />
          <text-input
            v-model="form.android"
            :errors="$page.errors.android"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Android"
          />
          <text-input
            v-model="form.ios"
            :errors="$page.errors.ios"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="IOS"
          />
        </div>
        <div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex items-center">
          <button
            v-if="!service.deleted_at"
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
import FileInput from '@/admin/Shared/FileInput'

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
    TrashedMessage,
    FileInput
  },
  props: {
    service: Object,
    categories: Array
  },
  remember: "form",
  data() {
    return {
      sending: false,
      form: {
        image: this.service.image,
        name: this.service.name,
        description: this.service.description,
        status: this.service.status,
        category_id: this.service.category_id,
        web: this.service.web,
        android: this.service.android,
        ios: this.service.ios
      }
    };
  },
  methods: {
    submit() {
      this.sending = true;
      this.$inertia
        .put(this.route("services.update", this.service.id), this.form)
        .then(() => (this.sending = false));
    },
    destroy() {
      if (confirm("Are you sure you want to delete this service?")) {
        this.$inertia.delete(this.route("services.destroy", this.service.id));
      }
    },
    restore() {
      if (confirm("Are you sure you want to restore this service?")) {
        this.$inertia.put(this.route("services.restore", this.service.id));
      }
    }
  }
};
</script>
