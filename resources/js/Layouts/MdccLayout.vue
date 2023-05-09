<script setup></script>

<template>
    <container>
        <header class="flex">
            <h1 class="flex-grow">Marx Dormoy Chess Club</h1>

            <nav class="flex justify-end">
                <ul class="flex flex-wrap items-center justify-center mb-6 text-gray-900">
                    <!-- TODO: add active class to current page //-->
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/join">Join</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>

        <slot />

        <footer class="flex ">
            <div>
                Built with Laravel, Vue.js, and Inertia.js. Text by Chat GPT.
                This website is just a fake website to test various Laravel features and should not be taken seriously.
            </div>

            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/join">Join</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>

            <input type="email" />
        </footer>
    </container>
</template>