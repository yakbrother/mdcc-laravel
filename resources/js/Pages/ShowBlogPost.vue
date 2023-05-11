<script setup>
import MdccLayout from "../Layouts/MdccLayout.vue";

defineProps({
    blog_post: Object,
    markdown_content: String,
});
</script>

<template>
    <MdccLayout>
        <article>
            <h2>Blog</h2>

            <h3 class="text-xl font-semibold mb-10">{{ blog_post.title }}</h3>
            <div v-html="markdown_content">
            </div>
        </article>

    </MdccLayout>
</template>
