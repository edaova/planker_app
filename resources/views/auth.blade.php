<x-layouts.app>
    <x-layouts.guest>
        <!-- Log in formmulář -->
        <div class="mb-6">
            <div class="bg-gray-800 py-1 mx-3 rounded-t-lg text-white font-md uppercase w-45 flex justify-center">
                Log in
            </div>

            <form action="{{ route('login') }}" method="POST" class="rounded-xl border border-neutral-200 shadow-md bg-neutral-50 flex flex-col justify-center items-center h-auto gap-4 p-4">
                @csrf
                <x-input label="E-mail" type="email" name="email" />
                <x-input label="Password" type="password" name="password" />
                
                @if ($errors->hasBag('login'))
                    <p class="text-red-500 text-xs mt-1">{{ $errors->login->first() }}</p>
                @endif
                <x-button>Log in</x-button>
            </form>
        </div>

        <!-- Registrační formulář -->
        <div>
            <p class="text-lg font-medium uppercase flex justify-center">
                Do not have an account <span class="text-red-500 ml-1 mr-1">yet?</span>Make one here 💚
            </p>

            <form action="{{ route('register') }}" method="POST" class="rounded-lg border border-neutral-200 shadow-md bg-neutral-50 flex flex-col justify-center items-center p-4 gap-4">
                @csrf
                <x-input label="Name" type="text" name="name" />
                <x-input label="Surname" type="text" name="surname" />
                <x-input label="E-mail" type="email" name="email" />
                <x-input label="Password" type="password" name="password" />
                <x-input label="Confirm Password" type="password" name="password_confirmation" />

                @if ($errors->hasBag('register'))
                    <p class="text-red-500 text-xs mt-1">{{ $errors->register->first() }}</p>
                @endif
                <x-button>Submit</x-button>
            </form>
        </div>
    </x-layouts.guest>
</x-layouts.app>