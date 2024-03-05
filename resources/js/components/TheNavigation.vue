<template>
  <nav>
    <ul>
      <li>
        <a href="/">
          Kewlgame
        </a>
      </li>
    </ul>
  </nav>
</template>

<script setup lang="ts">
</script>

<style lang="scss" scoped>
    nav {
        position: sticky;
        top: 0;
        width: 100%;
        color: c.$white-navy;
        background-color: c.$navy-main;
        border-bottom: 1px c.$navy-lighter;
        a {
            display: inline-block;
            @include m.padding;
            @include m.main-transition;
        }
    }
</style>
