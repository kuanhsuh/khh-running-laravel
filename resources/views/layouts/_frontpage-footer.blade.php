 <!-- Footer -->
<!-- This example requires Tailwind CSS v2.0+ -->
<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8 xl:col-span-1">
                <p class="text-base text-gray-500">加入我們的跑步團體，為健康而跑，為樂趣而跑，為更美好的明天而跑! 高雄馬拉松協會幫你突破極限，打破紀錄!</p>
                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/kaohsiunghmarathonfederation" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>


                </div>
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-base font-medium text-gray-900">導覽列</h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="/" class="text-base text-gray-500 hover:text-gray-900">首頁</a>
                            </li>

                            <li>
                                <a href="/about" class="text-base text-gray-500 hover:text-gray-900">關於</a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/kaohsiunghmarathonfederation" class="text-base text-gray-500 hover:text-gray-900">加入</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div>
                    <h3 class="text-base font-medium text-gray-900">聯絡我們</h3>
                    <ul role="list" class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">82648高雄市梓官區大舍南路92號
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">E:
                                kuanhsuh@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-200 pt-8">
            <p class="text-base text-gray-400 xl:text-center">&copy; 2020 Your Company, Inc. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<script>
    var menuButton = document.querySelector("#menuButton");
    var mobileMenu = document.querySelector("#mobile-menu");

    menuButton.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden')
    })

</script>
