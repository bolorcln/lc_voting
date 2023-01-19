<x-app-layout>
  <div>
    <a href="/" class="flex items-center font-semibold hover:underline">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
        <path fill-rule="evenodd"
          d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"
          clip-rule="evenodd" />
      </svg>
      <span class="ml-2">
        All ideas
      </span>
    </a>
  </div>

  <div class="idea-container bg-white rounded-xl flex mt-4">
    <div class="flex flex-1 px-4 py-6">
      <div class="flex-none">
        <a href="#">
          <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
      </div>
      <div class="mx-4 w-full">
        <h4 class="text-xl font-semibold">
          <a href="#" class="hover:underline">
            A random title can go here
          </a>
        </h4>
        <div class="text-gray-600 mt-3">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio iure esse eum quod facilis voluptatum omnis
          porro maxime totam. Dolorem, libero. Illo sit unde impedit illum voluptas, minus commodi quibusdam?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem maiores natus vero! Mollitia laboriosam
          dolorum aliquam ipsum libero quod officia similique dolorem, iusto dicta? Praesentium voluptatibus laboriosam
          quae culpa dicta.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, eos! Officia corrupti illum excepturi
          molestias ad aliquam pariatur voluptatem reiciendis asperiores nobis quisquam nemo, laboriosam dignissimos
          inventore numquam optio eveniet.
        </div>
        <div class="flex items-center justify-between mt-6">
          <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
            <div class="text-gray-900 font-bold">John Doe</div>
            <div>&bull;</div>
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
              class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
              </svg>
              <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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

  <div class="buttons-container flex items-center justify-between mt-6">
    <div class="flex items-center space-x-4 ml-6">
      <div class="relative">
        <button type="button"
          class="flex items-center justify-center w-32 h-11 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
          Reply
        </button>
        <div class="hidden absolute z-10 w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl">
          <form action="#" class="space-y-4 px-4 py-6">
            <div>
              <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                class="w-full text-sm bg-gray-100 rounded-xl placeholder:text-gray-900 border-none px-4 py-2"
                placeholder="Go ahead, dont't be shy. Sharer your thoughts..."></textarea>
            </div>
            <div class="flex items-center space-x-3">
              <button type="submit"
                class="flex items-center justify-center w-1/2 h-11 text-sm bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                Post Comment
              </button>
              <button type="button"
                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-4 h-4 text-gray-600 transform -rotate-45">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                </svg>
                <span class="ml-1">Attach</span>
              </button>
            </div>
          </form>
        </div>
      </div>

      <div class="relative">
        <button type="button"
          class="flex items-center justify-center w-36 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
          <span>Set Status</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2">
            <path fill-rule="evenodd"
              d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <div class="absolute z-20 w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl">
          <form action="#" class="space-y-4 px-4 py-6">
            <div class="space-y-2">
              <div>
                <label class="inline-flex items-center">
                  <input type="radio" checked="" class="bg-gray-200 text-gray-600 border-none" name="status" value="1">
                  <span class="ml-2">Open</span>
                </label>
              </div>

              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="bg-gray-200 text-purple border-none" name="status" value="2">
                  <span class="ml-2">Considering</span>
                </label>
              </div>

              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="bg-gray-200 text-yellow border-none" name="status" value="3">
                  <span class="ml-2">In Progress</span>
                </label>
              </div>

              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="bg-gray-200 text-green border-none" name="status" value="4">
                  <span class="ml-2">Implemented</span>
                </label>
              </div>

              <div>
                <label class="inline-flex items-center">
                  <input type="radio" class="bg-gray-200 text-red border-none" name="status" value="5">
                  <span class="ml-2">Closed</span>
                </label>
              </div>
            </div>

            <div>
              <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                class="w-full text-sm bg-gray-100 rounded-xl placeholder:text-gray-900 border-none px-4 py-2"
                placeholder="Add on update comment (optional)"></textarea>
            </div>

            <div class="flex items-center justify-between space-x-3">
              <button type="button"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-4 h-4 text-gray-600 transform -rotate-45">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                </svg>
                <span class="ml-1">Attach</span>
              </button>
              <button type="submit"
                class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 text-white">
                Update
              </button>
            </div>

            <div>
              <label class="font-normal inline-flex items-center">
                <input type="checkbox" name="notify_voters" class="bg-gray-200 rounded border-none" checked="">
                <span class="ml-2">Notify all voters</span>
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="flex items-center space-x-3">
      <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
        <div class="text-xl leading-snug">12</div>
        <div class="text-gray-400 text-xs leading-none">Votes</div>
      </div>

      <button type="button"
        class="w-32 h-11 text-xs bg-gray-200 font-bold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 uppercase">
        <span>Vote</span>
      </button>
    </div>
  </div> <!-- end buttons-container -->

  <div class="comments-container relative space-y-6 ml-22 my-8 mt-1 pt-4">
    <div class="comment-container relative bg-white rounded-xl flex mt-4">
      <div class="flex flex-1 px-4 py-6">
        <div class="flex-none">
          <a href="#">
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
              class="w-14 h-14 rounded-xl">
          </a>
        </div>
        <div class="mx-4 w-full">
          {{-- <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">
              A random title can go here
            </a>
          </h4> --}}
          <div class="text-gray-600 mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio iure esse eum quod facilis voluptatum omnis
            porro maxime totam. Dolorem, libero. Illo sit unde impedit illum voluptas, minus commodi quibusdam?
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div class="text-gray-900 font-bold">John Doe</div>
              <div>&bull;</div>
              <div>10 hours age</div>
            </div>

            <div class="flex items-center space-x-2">
              <button
                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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
    </div> <!-- end comment container -->

    <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
      <div class="flex flex-1 px-4 py-6">
        <div class="flex-none">
          <a href="#">
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
              class="w-14 h-14 rounded-xl">
          </a>
          <div class="text-center text-blue uppercase font-bold text-xxs mt-1">Admin</div>
        </div>
        <div class="mx-4 w-full">
          <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">
              Status changed to "Under Consideration"
            </a>
          </h4>
          <div class="text-gray-600 mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio iure esse eum quod facilis voluptatum omnis
            porro maxime totam. Dolorem, libero. Illo sit unde impedit illum voluptas, minus commodi quibusdam?
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div class="text-blue font-bold">John Doe</div>
              <div>&bull;</div>
              <div>10 hours age</div>
            </div>

            <div class="flex items-center space-x-2">
              <button
                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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
    </div> <!-- end comment container -->

    <div class="comment-container relative bg-white rounded-xl flex mt-4">
      <div class="flex flex-1 px-4 py-6">
        <div class="flex-none">
          <a href="#">
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
              class="w-14 h-14 rounded-xl">
          </a>
        </div>
        <div class="mx-4 w-full">
          {{-- <h4 class="text-xl font-semibold">
            <a href="#" class="hover:underline">
              A random title can go here
            </a>
          </h4> --}}
          <div class="text-gray-600 mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio iure esse eum quod facilis voluptatum omnis
            porro maxime totam. Dolorem, libero. Illo sit unde impedit illum voluptas, minus commodi quibusdam?
          </div>
          <div class="flex items-center justify-between mt-6">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
              <div class="text-gray-900 font-bold">John Doe</div>
              <div>&bull;</div>
              <div>10 hours age</div>
            </div>

            <div class="flex items-center space-x-2">
              <button
                class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                <ul class="hidden absolute w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 text-left ml-8">
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
    </div> <!-- end comment container -->
  </div> <!-- end comments-container -->
</x-app-layout>