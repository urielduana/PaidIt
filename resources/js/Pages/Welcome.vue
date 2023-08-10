<script setup>
import { Head, Link } from "@inertiajs/vue3";
import DarkSwitch from "@/Components/DarkSwitch.vue";
import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div
            v-if="canLogin"
            class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"
        >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard.index')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link
                >
            </template>
            <div>
                <DarkSwitch />
            </div>
        </div>

        <div class="container">
            

        <section class="text-white-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white-900">We are Paid-It!
            <br class="hidden lg:inline-block">The best payment platform
            </h1>
            <p class="mb-8 leading-relaxed">Our focus is directed towards private educational institutions in Mexico, with an initial focus on the high school level.
              We are committed to providing technology solutions that enable these institutions to improve their internal administration, remain competitive with 
              other institutions and provide a more seamless and convenient experience for their students and staff.
            </p>
            </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 items-center">
        <AuthenticationCardLogo />
        </div>
        </div>
        </section>
        
        <section class="text-black-700 body-font border-t border-black-200">
        <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-indigo-900">About Us...</h1>
        </div>
        <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-black-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M4 19.5A2.5 2.5 0 006.5 22H18a2 2 0 002-2V4a2 2 0 00-2-2H6.5A2.5 2.5 0 004 4.5v15z"></path>
                <path d="M20 6H4l3-4h10l3 4z"></path>
                </svg>
              </div>
              <h2 class="text-black-900 text-lg title-font font-medium">Mission</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Transforming the financial management experience in private educational institutions by providing innovative 
              technology solutions that drive administrative efficiency, improve the quality of life of students, and improve the quality of life of students. 
              innovative technology solutions that drive administrative efficiency, improve student quality of life, and promote business agility within the institution. 
              and promote business agility within the institution.
            </p>
            </div>
            </div>
            </div>
            <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-black-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M4 19.5A2.5 2.5 0 006.5 22H18a2 2 0 002-2V4a2 2 0 00-2-2H6.5A2.5 2.5 0 004 4.5v15z"></path>
                <path d="M20 6H4l3-4h10l3 4z"></path>
                </svg>
              </div>
              <h2 class="text-black-900 text-lg title-font font-medium">Vision</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">To be leaders in the digital transformation of the education sector, being recognized as the preferred technology platform for private 
                platform of choice for private educational institutions. We aspire to establish a standard of excellence in financial management and user experience, positively impacting 
                and user experience, positively impacting operational efficiency, student satisfaction and business agility within institutions. 
                within the institutions.
              </p>
            </div>
            </div>
            </div>
            </div>
            </div>
        </section>

  <section class="text-black-700 body-font border-t border-black-200">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-indigo-900">Our team</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Members and their roles in the project</p>
      </div>
      <div class="flex flex-wrap -m-2">
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-black-200 border p-4 rounded-lg">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
            <div class="flex-grow">
              <h2 class="text-black-900 title-font font-medium">Pedro Copado</h2>
              <p class="text-gray-500">Software Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
            <div class="flex-grow">
              <h2 class="text-black-900 title-font font-medium">Carolina Cortés</h2>
              <p class="text-gray-500">Frontend Developer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
            <div class="flex-grow">
              <h2 class="text-black-900 title-font font-medium">Uriel Duana</h2>
              <p class="text-gray-500">Project Manager</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
            <div class="flex-grow">
              <h2 class="text-black-900 title-font font-medium">Ulises Florean</h2>
              <p class="text-gray-500">DevOps Engineer</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
            <div class="flex-grow">
              <h2 class="text-black-900 title-font font-medium">Ana Hernández</h2>
              <p class="text-gray-500">Data Analyst</p>
            </div>
          </div>
        </div>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
            <div class="flex-grow">
              <h2 class="text-black-900 title-font font-medium">Gustavo Montoya</h2>
              <p class="text-gray-500">Backend Developer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="text-black-700 body-font overflow-hidden border-t border-black-200">
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
      <div class="lg:w-1/4 mt-48 hidden lg:block">
        <div class="mt-px border-t border-gray-300 border-b border-l rounded-tl-lg rounded-bl-lg overflow-hidden">
          <p class="bg-black-100 text-black-900 h-12 text-center px-4 flex items-center justify-start -mt-px"></p>
          <p class="text-black-900 h-12 text-center px-4 flex items-center justify-start">Balance Management</p>
          <p class="bg-black-100 text-black-900 h-12 text-center px-4 flex items-center justify-start">Business Profile</p>
          <p class="text-black-900 h-12 text-center px-4 flex items-center justify-start">Custom Orders</p>
          <p class="bg-black-100 text-black-900 h-12 text-center px-4 flex items-center justify-start">Notifications and Alerts</p>
          <p class="text-black-900 h-12 text-center px-4 flex items-center justify-start">Support</p>
          <p class="bg-black-100 text-black-900 h-12 text-center px-4 flex items-center justify-start">Access to new features</p>
        </div>
      </div>

      <div class="flex lg:w-3/4 w-full flex-wrap lg:border border-black-300 rounded-lg">
        <div class="lg:w-1/3 lg:mt-px w-full mb-10 lg:mb-0 border-2 border-black-300 lg:border-none rounded-lg lg:rounded-none">
          <div class="px-2 text-center h-48 flex flex-col items-center justify-center">
            <h3 class="tracking-widest">Initial</h3>
            <h2 class="text-5xl text-black-900 font-medium leading-none mb-4 mt-2">Free</h2>
            <span class="text-sm text-indigo-600">For 3 months</span>
          </div>
          <p class="bg-black-100 text-black-600 h-12 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">Limited functions</p>
          <p class="text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="text-black-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
          <p class="text-black-600 text-center h-12 flex items-center justify-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" class="w-5 h-5 text-gray-500" viewBox="0 0 24 24">
              <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
          </p>
  
          <div class="border-t border-black-300 p-6 text-center rounded-bl-lg">
            <button class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Start now!
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">Start your test now!</p>
          </div>
        </div>
        <div class="lg:w-1/3 lg:-mt-px w-full mb-10 lg:mb-0 border-2 rounded-lg border-indigo-500 relative">
          <span class="bg-indigo-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">POPULAR</span>
          <div class="px-2 text-center h-48 flex flex-col items-center justify-center">
            <h3 class="tracking-widest">PRO</h3>
            <h2 class="text-5xl text-black-900 font-medium flex items-center justify-center leading-none mb-4 mt-2">$380
              <span class="text-black-600 text-base ml-1">/monthly</span>
            </h2>
            <span class="text-sm text-indigo-600">$2600 each year</span>
          </div>
          <p class="bg-black-100 text-black-600 h-12 text-center px-2 flex items-center -mt-px justify-center border-t border-gray-300">Complete functionality</p>
          <p class="text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          <p class="bg-black-100 text-black-600 text-center h-12 flex items-center justify-center">
            <span class="w-5 h-5 inline-flex items-center justify-center bg-indigo-500 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>
          </p>
          
          <div class="p-6 text-center border-t border-black-300">
            <button class="flex items-center mt-auto text-white bg-indigo-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-indigo-600 rounded">Start today!
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </button>
            <p class="text-xs text-gray-500 mt-3">The best option!</p>
          </div>
        </div>

      </div>
    </div>
  </section>


  
        </div>
    </div>

    <footer class="text-gray-700 body-font">
    <div class="border-t border-gray-200">
      <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
        <span class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
          <a class="text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
    <div class="bg-white-200">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-500 text-sm text-center sm:text-left">© PaidIt v1.0.0 —</p>
      </div>
    </div>
  </footer>
  <a href="https://github.com/urielduana/PaidIt" class="rounded-full w-12 h-12 bg-gray-100 fixed bottom-0 right-0 flex items-center justify-center text-gray-800 mr-8 mb-8 shadow-sm border-gray-300 border" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
    </svg></a>

</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
