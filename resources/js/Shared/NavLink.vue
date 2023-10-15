<template>
  <Link class="text-blue hover:underline" :class="{ 'font-bold underline': active }">
    <slot />
  </Link>
</template>

<script>
export default {
  props: {
    active: Boolean,
  },
};
</script>
