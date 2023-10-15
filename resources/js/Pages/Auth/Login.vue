<template>
  <Head title="Log In" />

  <main class="grid place-items-center min-h-screen">
    <section class="bg-white p-8 rounded-xl max-w-md mx-auto border w-full">
      <h1 class="text-3xl mb-6 text-center">Login</h1>

      <form @submit.prevent="submit">
        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Email </label>

          <input
            v-model="form.email"
            class="border p-2 w-full rounded"
            type="email"
            name="email"
            id="email"
            autofocus
            required
          />

          <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>
        </div>

        <div class="mb-6">
          <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password"> Password </label>

          <input
            v-model="form.password"
            class="border p-2 w-full rounded"
            type="password"
            name="password"
            id="password"
          />

          <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>
        </div>

        <div class="text-center">
          <button
            type="submit"
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 w-full"
            :disabled="form.processing"
          >
            Log In
          </button>
        </div>
      </form>
      <br />
      <div class="text-center">
        Don't have an account?
        <Link href="register" class="text-blue-500 text-sm ml-3"> Signup </Link>
      </div>
    </section>
  </main>
</template>

<script>
export default {
  layout: null,
};
</script>

<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

let form = useForm({
  email: '',
  password: '',
});

let submit = () => {
  form.post('/login');
};
</script>
