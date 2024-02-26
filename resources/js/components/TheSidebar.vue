<template>
  <aside>
    <ul class="links">
      <li
        v-for="link in links"
        :key="link.id"
      >
        <a :href="link.to">
          {{ link.text }}
        </a>
      </li>
    </ul>
  </aside>
</template>

<script setup lang="ts">
import type { Link } from '../../types/Link'
defineProps<{
    links: Link[]
}>()
</script>

<style scoped lang="scss">
aside {
    background-color: c.$navy-main;
    color: c.$white-main;
    .links {
        @include m.wrapper;
        @include m.padding;
    }
}
</style>
