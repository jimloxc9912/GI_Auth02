<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-2xl w-full space-y-10 text-center">

            <!-- Icono -->


            <!-- Heading -->
            <div>
                <h1 class="text-5xl sm:text-6xl font-extrabold tracking-tight text-gray-400">
                    Welcome to
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 text-indigo-600">
                        Auth Project
                    </span>
                </h1>
                <p class="mt-6 mb-6 text-lg sm:text-xl text-slate-600 text-gray-400 leading-relaxed max-w-xl mx-auto">
                    Sign up or log in to access your personalized dashboard and unlock all features.
                </p>
            </div>

            <!-- Botones -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-10">

                <!-- Sign In -->
                <a href="{{ route('login') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center
                          px-8 py-3 text-base font-semibold rounded-xl
                          text-indigo-600 bg-indigo-50
                          border border-indigo-200
                          hover:bg-indigo-100 hover:text-indigo-700
                          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
                          transition-all duration-200 mb-6 sm:mb-0">
                    Sign In
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                    </svg>
                </a>

                <!-- Create Account -->
                <a href="{{ route('register') }}"
                   class="w-full sm:w-auto inline-flex items-center justify-center
                          px-8 py-3 text-base font-semibold rounded-xl
                          text-indigo-600 bg-indigo-50
                          border border-indigo-200
                          hover:bg-indigo-100 hover:text-indigo-700
                          focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
                          transition-all duration-200 mb-6 sm:mb-0">
                    Create Account
                </a>
            </div>

            <!-- Google Sign In -->
            <div class="mt-8">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center hidden">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-gray-50 text-gray-400">
                            Or continue with
                        </span>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ url('/google-auth/redirect') }}"
                       class="w-full sm:w-auto inline-flex items-center justify-center
                              px-8 py-3 rounded-xl text-base font-medium
                              text-gray-700 bg-white
                              border border-gray-200
                              hover:bg-gray-50 hover:shadow-md
                              focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
                              transition-all duration-200">
                        <svg class="w-5 h-5 mr-3" viewBox="0 0 24 24">
                            <path fill="#4285F4"
                                  d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853"
                                  d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05"
                                  d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335"
                                  d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Sign in with Google
                    </a>
                </div>
            </div>

            <!-- Features -->
            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-3">

                <div class="text-center">
                    <div class="flex justify-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-100 text-indigo-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-indigo-600">Secure</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Your data is protected with industry-standard encryption
                    </p>
                </div>

                <div class="text-center">
                    <div class="flex justify-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-100 text-indigo-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-indigo-600">Fast</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Lightning-fast performance for a seamless experience
                    </p>
                </div>

                <div class="text-center">
                    <div class="flex justify-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-xl bg-indigo-100 text-indigo-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-indigo-600">Customizable</h3>
                    <p class="mt-2 text-sm text-gray-500">
                        Tailor your dashboard to fit your needs
                    </p>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
