<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                    <div class="sm:col-span-4">
                        <x-form-field class="sm:col-span-4">
                            <x-form-label for="email">Email</x-form-label>
                            <div class="mt-2">

                                <x-form-input  id="email" name="email" required type="email" :value="old('email')"/>

                                <x-form-error name="email"/>

                            </div>
                        </x-form-field>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-field class="sm:col-span-4">
                            <x-form-label for="password">Password</x-form-label>
                            <div class="mt-2">

                                <x-form-input  id="password" name="password" required type="password" />

                                <x-form-error name="password"/>

                            </div>
                        </x-form-field>
                    </div>
                    </div>

                </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button>Login</x-form-button>
            <a href="/">Forgot you password?</a>
        </div>

            </div>
        </div>

    </form>

</x-layout>
