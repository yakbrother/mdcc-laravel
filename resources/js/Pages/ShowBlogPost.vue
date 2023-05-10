<script setup>
import MdccLayout from "../Layouts/MdccLayout.vue";
import ReactMarkdown from 'react-markdown';

defineProps({
    blog_post: Object,
});
</script>

<template>
    <MdccLayout>
        <article>
            <h2>Blog</h2>

            <h3 class="text-xl font-semibold mb-10">{{ blog_post.title }}</h3>
            <p>
                <ReactMarkdown source={blog_post.body} />
            </p>
        </article>

    </MdccLayout>
</template>
