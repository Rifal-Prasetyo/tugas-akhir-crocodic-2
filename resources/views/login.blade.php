<x-layout.header :site="$site" />
<div class="h-screen w-full bg-secondary">
    <div class="container mx-auto">
        <div class="w-full h-screen flex justify-center items-center">
            <div
                class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form class="space-y-6" action="{{ route('loginAction') }}" method="POST">
                    @csrf
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ config('app.name') }}</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ config('app.description') }}</span>
                    </div>
                    @if (Session::get('message'))
                        <x-components.alert :type="Session::get('message')['type']" :msg="Session::get('message')['msg']" />
                    @endif
                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="name@company.com" required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                            Sandi</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required />
                    </div>

                    <button type="submit"
                        class="w-full mb-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk
                        Ke Akun Anda</button>
                    <span class="text-sm text-gray-500 dark:text-gray-400">V1.1</span>
                </form>
            </div>

        </div>
    </div>
</div>

<x-layout.footer />
