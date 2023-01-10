<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto border border-gray-200  bg-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form method="post" action="/login" class="mt-10">
                @csrf
                <x-form-input title="username" />
                <x-form-input title="password" type="password" />

                <x-form-submit />
            </form>
        </main>
    </section>
</x-layout>
