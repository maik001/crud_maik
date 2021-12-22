<template>
  <main>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"><Link href="/">Desafio Time Tech</Link></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <Link class="p-2 text-dark" href='/inserir'>Cadastrar Usuário</Link>
      </nav>
    </div>
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
  components: {
    Link,
  }
}
</script>

<style>
</style>
