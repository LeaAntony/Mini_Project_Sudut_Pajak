<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Perbarui Kata Sandi
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label class="form-control w-full mb-10">
                <div class="label">
                    <span class="label-text">Kata Sandi Saat Ini</span>
                </div>
                <x-text-input id="update_password_current_password" name="current_password" type="password" placeholder="********" class="input input-accent w-full" autocomplete="current-password" />
            </label>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <label class="form-control w-full mb-10">
                <div class="label">
                    <span class="label-text">Kata Sandi Baru</span>
                </div>
                <x-text-input id="update_password_password" name="password" type="password" placeholder="********" class="input input-accent w-full" autocomplete="new-password" />
            </label>
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <label class="form-control w-full mb-10">
                <div class="label">
                    <span class="label-text">Konfirmasi Kata Sandi Baru</span>
                </div>
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" placeholder="********" class="input input-accent w-full" autocomplete="new-password" />
            </label>
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg">simpan</x-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
