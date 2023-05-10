<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <container>
        <header class="flex max-w-4xl align-baseline m-auto items-center" role="banner">
            <h1 class="flex-grow text-2xl text-uppercase">Marx Dormoy Chess Club</h1>

            <nav class="flex justify-end" role="navigation">
                <ul class="flex flex-wrap mb-6 text-gray-900">
                    <li>
                        <Link href="/">Home</Link>
                    </li>
                    <li>
                        <Link href="/about" :class="{ 'active': $page.component === 'About' }">About</Link>
                    </li>
                    <li>
                        <Link href="/blog" :class="{ 'active': $page.startsWith === 'Blog' }">Blog</Link>
                    </li>
                    <li>
                        <Link href="/join" :class="{ 'active': $page.component === 'Join' }">Join</Link>
                    </li>
                    <li>
                        <Link href="/contact" :class="{ 'active': $page.component === 'Contact' }">Contact</Link>
                    </li>
                </ul>
            </nav>
        </header>

        <main class="max-w-4xl m-auto" role="main">
            <slot />
        </main>

        <div id="footer-wrapper" class="bg-white mt-12 p-12">
            <footer class="flex max-w-4xl m-auto" role="contentinfo">
                <p class="w-1/2 pr-12 text-[#996D60]">
                    Built with Laravel, Vue.js, and Inertia.js. Text by Chat GPT.
                    This website is just a fake website to test various Laravel features and should not be taken seriously.
                </p>

                <nav class="flex-grow justify-end mt-[1em]">
                    <ul class="flex flex-wrap items-center justify-center mb-6 text-gray-600">
                        <li>
                            <Link href="/">Home</Link>
                        </li>
                        <li>
                            <Link href="/about" :class="{ 'active': $page.component === 'About' }">About</Link>
                        </li>
                        <li>
                            <Link href="/blog" :class="{ 'active': $page.startsWith === 'Blog' }">Blog</Link>
                        </li>
                        <li>
                            <Link href="/join" :class="{ 'active': $page.component === 'Join' }">Join</Link>
                        </li>
                        <li>
                            <Link href="/contact" :class="{ 'active': $page.component === 'Contact' }">Contact</Link>
                        </li>
                    </ul>
                </nav>
            </footer>
        </div>
    </container>
</template>