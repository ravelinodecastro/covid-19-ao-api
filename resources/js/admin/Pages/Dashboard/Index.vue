<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Página Inicial</h1>
    <p class="mb-4 leading-normal">
      Actualização:
      <b class="font-bold">{{configs.auto_update == 1? 'Automática': 'Manual'}}</b>
    </p>
    <p class="mb-4 leading-normal">
      Actualizado aos:
      <b class="font-bold">{{date}}</b>
    </p>
    <p class="mb-4 leading-normal">
      Casos confirmados:
      <b class="font-bold">{{general.confirmed}}</b>
    </p>
    <p class="mb-4 leading-normal">
      Casos activos:
      <b class="font-bold">{{general.active}}</b>
    </p>
    <p class="mb-4 leading-normal">
      Recuperados:
      <b class="font-bold">{{general.recovered}}</b>
    </p>
    <p class="mb-4 leading-normal">
      Casos suspeitos:
      <b class="font-bold">{{general.suspects}}</b>
    </p>
    <p class="mb-4 leading-normal">
      Óbitos:
      <b class="font-bold">{{general.deaths}}</b>
    </p>
  </div>
</template>

<script>
import Layout from "@/admin/Shared/Layout";

export default {
  metaInfo: { title: "Página Inicial" },
  props: {
    general: Object,
    configs: Object,
    date: String
  },
  layout: Layout
};
</script>
