<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link
        class="text-indigo-400 hover:text-indigo-600"
        :href="route('categories')"
      >Serviços</inertia-link>
      <span class="text-indigo-400 font-medium">/</span> Create
    </h1>
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
import FileInput from "@/admin/Shared/FileInput";

export default {
  metaInfo: { title: "Cadastrar Serviços" },
  layout: Layout,
  components: {
    LoadingButton,
    SelectInput,
    TextInput,
    FileInput
  },
  remember: "form",
  data() {
    return {
      sending: false,
      form: {
        name: null
      }
    };
  },
  methods: {
    submit() {
      this.sending = true;
      this.$inertia
        .post(this.route("categories.store"), this.form)
        .then(() => (this.sending = false));
    }
  }
};
</script>
