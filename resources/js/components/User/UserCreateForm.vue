<template>
  <form action="">
    <input type="text">
    <button>
      Submit
    </button>
  </form>
</template>

<script setup lang="ts">

</script>

<style lang="scss" scoped>
form {
    display: flex;
    flex-direction: column;
    @include m.gap;
}
input {
    max-width: 800px;
    &:focus {
        color: c.$navy-main;
    }
    @include m.padding(0.5, 0.5);
    @include m.main-transition;
}
button {
    font-size: 1rem;
    background-color: c.$navy-main;
    color: c.$white-navy;
    @include m.padding($x-ratio: 2);
    @include m.main-transition;
}
</style>
