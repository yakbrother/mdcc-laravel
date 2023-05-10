<script setup>
import MdccLayout from "../Layouts/MdccLayout.vue";
import { Link } from '@inertiajs/vue3';
import moment from "moment";

defineProps({
    blog_posts: Object,
});

</script>

<template>
    <MdccLayout>
        <article>
            <h2>Latest Blog Posts</h2>

            <section v-for="blog_post in blog_posts" :key="blog_post.id">

                <h3 class="font-sans text-xl mt-6">{{ blog_post.title }}</h3>
                <p class="pl-12 mt-0"><em>{{ moment(blog_post.created_at).format("DD-MM-YYYY") }}</em> | {{
                    blog_post.excerpt }}</p>

                <Link :href="route('blog_post.show', blog_post.id)"
                    class="text-indigo-600 hover:text-indigo-800 w-fit self-end font-semibold">
                Read more
                </Link>
            </section>

        </article>

    </MdccLayout>
</template>
