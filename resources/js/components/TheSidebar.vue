<template>
  <aside>
    <ul>
      <li
        v-for="link in linksSorted"
        :key="link.id"
      >
        <a
          class="link"
          :href="link.to"
        >
          {{ link.text }}
        </a>
      </li>
    </ul>
  </aside>
</template>

<script setup lang="ts">
import { computed } from 'vue'
import type { Link } from '../../types/Link'
const props = defineProps<{
    links: Link[]
}>()
const linksSorted = computed(() => {
    return [...props.links].sort((a, b) => a.id - b.id)
})
</script>

<style scoped lang="scss">
aside {
    background-color: c.$navy-main;
    color: c.$white-main;
    .link {
        display: block;
        @include m.padding;
        @include m.main-transition;
    }
}
</style>
