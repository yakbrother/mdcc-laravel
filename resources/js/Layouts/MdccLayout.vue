<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <container>

        <div id="sticky" class="sticky top-0 bg-gray-800 text-[#fcb69f] p-4">
            <p class="m-0 text-center text-sm font-bold">This site is entirely fake, created just for playing with
                Laravel plugins.
            </p>
        </div>

        <header class="flex mt-24 mb-12 pb-6 border-gray-800 border-b max-w-4xl align-center m-auto items-center"
            role="banner">
            <img id="mdcc-logo" class="flex-grow mr-24" src="/img/mdcc-logo.png" alt="Marx Dormoy Chess Club"
                title="Marx Dormoy Chess Club" />

            <nav class="flex justify-end" role="navigation">
                <ul class="flex mb-6 text-gray-900">
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
                    </ul>
                </nav>
            </footer>
        </div>
    </container>
</template>