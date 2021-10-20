<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="d-flex justify-content-center mb-4">
                <x-application-logo width=64 height=64 />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nama" :value="__('Nama')" />

                <x-input id="nama" class="" type="text" name="nama" :value="old('nama')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="tempat_lahir" :value="__('Tempat Lahir')" />

                <x-input id="tempat_lahir" class="" type="text" name="tempat_lahir" :value="old('tempat_lahir')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="tanggal_lahir" :value="__('Tanggal Lahir')" />

                <x-input id="tanggal_lahir" class="" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="pekerjaan" :value="__('Pekerjaan')" />

                <x-input id="pekerjaan" class="" type="text" name="pekerjaan" :value="old('pekerjaan')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat')" />

                <x-input id="alamat" class="" type="text" name="alamat" :value="old('alamat')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class=""
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class=""
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="d-flex justify-content-end mt-4">
                <a class="text-muted" href="{{ route('login') }}" style="margin-right: 15px; margin-top: 15px;">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
