<template>
  <p
    class="flash-message"
    :data-success="wasSuccess"
  >
    {{ message }}
  </p>
</template>

<script setup lang="ts">
import { computed } from 'vue'
const props = defineProps<{
    result: 0 | 1
}>()
const wasSuccess = computed(() => {
    if(props.result === 1){
        return true
    }
    else {
        return false
    }
})
const message = computed(() => {
    if(wasSuccess.value){
        return 'Previous operation was a success.'
    }
    else {
        return 'Previous operation failed.'
    }
})
</script>

<style lang="scss" scoped>
.flash-message {
    max-width: max-content;
    margin-bottom: v.$base-distance;
    @include m.padding;
    &[data-success="true"]{
        border: 1px solid #46b146;
    }
    &[data-success="false"]{
        border: 1px solid #d43e33
    }
}
</style>
