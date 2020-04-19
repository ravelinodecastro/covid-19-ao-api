<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('services')">Serviços</inertia-link>
      <span class="text-indigo-400 font-medium">/</span> Create
    </h1>
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
        <div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex justify-end items-center">
          <loading-button :loading="sending" class="btn-indigo" type="submit">Create Organization</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import Layout from "@/admin/Shared/Layout";
import LoadingButton from "@/admin/Shared/LoadingButton";
import SelectInput from "@/admin/Shared/SelectInput";
import TextInput from "@/admin/Shared/TextInput";

export default {
  metaInfo: { title: "Cadastrar Serviços" },
  layout: Layout,
  components: {
    LoadingButton,
    SelectInput,
    TextInput
  },
  remember: "form",
  data() {
    return {
      sending: false,
      form: {
        image: null,
        name: null,
        description: null,
        status: null,
        category_id: null,
        web: null,
        android: null,
        ios: null
      }
    };
  },
  methods: {
    submit() {
      this.sending = true;
      this.$inertia
        .post(this.route("services.store"), this.form)
        .then(() => (this.sending = false));
    }
  }
};
</script>
