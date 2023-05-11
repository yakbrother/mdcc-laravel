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

        <main class="max-w-4xl m-auto flex-grow" role="main">
            <slot />
        </main>

        <div style="overflow: hidden;" class="mt-12">
            <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"
                style="fill: #ffffff; width: 125%; height: 75px; transform: rotate(180deg);">
                <path
                    d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
                    opacity=".25" />
                <path
                    d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
                    opacity=".5" />
                <path
                    d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
            </svg>
        </div>
        <div id="footer-wrapper" class="bg-white mt-0 p-0 pb-12 mt-auto">
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
        <div style="overflow: hidden;">
            <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"
                style="fill: #ffffff; width: 125%; height: 75px;">
                <path
                    d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
                    opacity=".25" />
                <path
                    d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
                    opacity=".5" />
                <path
                    d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
            </svg>
        </div>
    </container>
</template>