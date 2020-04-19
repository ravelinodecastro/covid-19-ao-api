<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link
        class="text-indigo-400 hover:text-indigo-600"
        :href="route('services')"
      >Configurações</inertia-link>
    </h1>

    <div class="bg-white rounded shadow overflow-hidden max-w-3xl">
      <form @submit.prevent="submit">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input
            v-model="form.source"
            :errors="$page.errors.source"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Fonte"
          />

          <select-input
            v-model="form.auto_update"
            :errors="$page.errors.auto_update"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Actualização"
          >
            <option :value="null" />
            <option value="1">Automatico</option>
            <option value="0">Manual</option>
          </select-input>
        </div>
        <div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex items-center">
          <loading-button
            :loading="sending"
            class="btn-indigo ml-auto"
            type="submit"
          >Actualizar configurações</loading-button>
        </div>
      </form>
    </div>
    <div class="bg-white rounded shadow overflow-hidden max-w-3xl" v-if="configs.auto_update==0">
      <form @submit.prevent="submit2">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input
            type="number"
            v-model="form2.active"
            :errors="$page.errors.active"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Casos activos"
          />
          <text-input
            type="number"
            v-model="form2.recovered"
            :errors="$page.errors.recovered"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Recuperados"
          />

          <text-input
            type="number"
            v-model="form2.suspects"
            :errors="$page.errors.suspects"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Casos suspeitos"
          />
          <text-input
            type="number"
            v-model="form2.deaths"
            :errors="$page.errors.deaths"
            class="pr-6 pb-8 w-full lg:w-1/2"
            label="Óbitos"
          />
        </div>
        <div class="px-8 py-4 bg-gray-100 border-t border-gray-200 flex items-center">
          <loading-button
            :loading="sending2"
            class="btn-indigo ml-auto"
            type="submit"
          >Actualizar dados</loading-button>
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
    return { title: "Configurações" };
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
    configs: Object,
    general: Object
  },
  remember: "form",
  data() {
    return {
      sending: false,
      sending2: false,
      form: {
        source: this.configs.source,
        auto_update: this.configs.auto_update
      },
      form2: {
        active: this.general ? this.general.active : "-",
        recovered: this.general ? this.general.recovered : "-",
        suspects: this.general ? this.general.suspects : "-",
        deaths: this.general ? this.general.deaths : "-"
      }
    };
  },
  methods: {
    submit() {
      this.sending = true;
      this.$inertia
        .put(this.route("configs.update", this.configs.id), this.form)
        .then(() => (this.sending = false));
    },
    submit2() {
      this.sending2 = true;
      this.$inertia
        .post(this.route("general.saveOrUpdate", this.general.id), this.form2)
        .then(() => (this.sending2 = false));
    }
  }
};
</script>
