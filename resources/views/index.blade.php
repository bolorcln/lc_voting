<x-app-layout>
  <div class="filters flex space-x-6">
    <div class="w-1/3">
      <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
        <option value="Category One">Category One</option>
        <option value="Category Two">Category Two</option>
        <option value="Category Three">Category Three</option>
        <option value="Category Four">Category Four</option>
      </select>
    </div>

    <div class="w-1/3">
      <select name="other_filters" id="other_filters" class="w-full rounded-xl px-4 py-2 border-none">
        <option value="Filter One">Filter One</option>
        <option value="Filter Two">Filter Two</option>
        <option value="Filter Three">Filter Three</option>
        <option value="Filter Four">Filter Four</option>
      </select>
    </div>

    <div class="w-2/3 relative">
      <input type="search" placeholder="Find an idea"
        class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder:text-gray-900">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-4 text-gray-700 absolute top-0 flex items-center h-full ml-2">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
      </svg>
    </div>
  </div> <!-- End Filters -->

  <div class="ideas-container space-y-6 my-6">
    <div
      class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>

        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
            Vote
          </button>
        </div>
      </div>

      <div class="flex flex-1 px-2 py-6">
        <div class="flex-none">
          <a href="#">
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
              class="w-14 h-14 rounded-xl">
          </a>
        </div>
        <div class="mx-4 w-full">
          <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">
              A random title can go here
            </a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours age</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>

            <div class="flex items-center space-x-2" x-data="{isOpen: false}">
              <div
                class="bg-gray-200 text-xxs text-center font-bold uppercase leading-none rounded-full w-28 h-7 py-2 px-4">
                Open
              </div>
              <button @click="isOpen = !isOpen"
                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul x-cloak x-show="isOpen" x-transition.origi.top.left @click.away="isOpen = false"
                  @keydown.escape.window="isOpen = false"
                  class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Mark as Spam
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Delete Post
                    </a>
                  </li>
                </ul>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end idea container -->

    <div
      class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>

        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
            Vote
          </button>
        </div>
      </div>

      <div class="flex px-2 py-6">
        <a href="#" class="flex-none">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">
              A random title can go here
            </a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, ullam ea nihil voluptatibus alias
            reiciendis perferendis autem temporibus facere et quaerat accusamus quia mollitia odio voluptatem! Suscipit
            repudiandae obcaecati quos.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores error nesciunt quo, eos iste eaque,
            amet eius quia voluptas, animi totam ipsum ea voluptatem aliquid aut ipsa dignissimos! Soluta?
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours age</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>

            <div class="flex items-center space-x-2">
              <div
                class="bg-gray-200 text-xxs text-center font-bold uppercase leading-none rounded-full w-28 h-7 py-2 px-4">
                Open
              </div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Mark as Spam
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Delete Post
                    </a>
                  </li>
                </ul>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end idea container -->

    <div
      class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>

        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
            Vote
          </button>
        </div>
      </div>

      <div class="flex px-2 py-6">
        <a href="#" class="flex-none">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">
              A random title can go here
            </a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, ullam ea nihil voluptatibus alias
            reiciendis perferendis autem temporibus facere et quaerat accusamus quia mollitia odio voluptatem! Suscipit
            repudiandae obcaecati quos.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores error nesciunt quo, eos iste eaque,
            amet eius quia voluptas, animi totam ipsum ea voluptatem aliquid aut ipsa dignissimos! Soluta?
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours age</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>

            <div class="flex items-center space-x-2">
              <div
                class="bg-gray-200 text-xxs text-center font-bold uppercase leading-none rounded-full w-28 h-7 py-2 px-4">
                Open
              </div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Mark as Spam
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Delete Post
                    </a>
                  </li>
                </ul>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end idea container -->

    <div
      class="idea-container hover:shadow-card cursor-pointer transition duration-150 ease-in bg-white rounded-xl flex">
      <div class="border-r border-gray-100 px-5 py-8">
        <div class="text-center">
          <div class="font-semibold text-2xl">12</div>
          <div class="text-gray-500">Votes</div>
        </div>

        <div class="mt-8">
          <button
            class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
            Vote
          </button>
        </div>
      </div>

      <div class="flex px-2 py-6">
        <a href="#" class="flex-none">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
        <div class="mx-4">
          <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">
              A random title can go here
            </a>
          </h4>
          <div class="text-gray-600 mt-3 line-clamp-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur, ullam ea nihil voluptatibus alias
            reiciendis perferendis autem temporibus facere et quaerat accusamus quia mollitia odio voluptatem! Suscipit
            repudiandae obcaecati quos.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolores error nesciunt quo, eos iste eaque,
            amet eius quia voluptas, animi totam ipsum ea voluptatem aliquid aut ipsa dignissimos! Soluta?
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div>10 hours age</div>
              <div>&bull;</div>
              <div>Category 1</div>
              <div>&bull;</div>
              <div class="text-gray-900">3 Comments</div>
            </div>

            <div class="flex items-center space-x-2">
              <div
                class="bg-gray-200 text-xxs text-center font-bold uppercase leading-none rounded-full w-28 h-7 py-2 px-4">
                Open
              </div>
              <button
                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Mark as Spam
                    </a>
                  </li>
                  <li>
                    <a href="#" class="block hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">
                      Delete Post
                    </a>
                  </li>
                </ul>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end idea container -->
  </div> <!-- end ideas containers -->
</x-app-layout>