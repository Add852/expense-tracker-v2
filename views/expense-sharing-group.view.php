<?php require('partials/head.php') ?>

<!-- Sidebar -->
<div class="bg-gray-900 w-16 h-screen fixed shadow-lg">
      <!-- Sidebar Content -->
      <!-- Icon 1 -->
      <div class="group relative">
        <img
          src="https://files.cults3d.com/uploaders/14013694/illustration-file/50f1a3a2-4979-4030-89fe-c7dfbaaa97ba/2023-05-25_22-38-38.png"
          alt="Icon 1"
          class="h-12 w-12 rounded-3xl mt-2 mb-2 mx-auto hover:rounded-xl transition-all ease-linear cursor-pointer shadow-lg"
        />

        <!-- Icon 1's Tooltip-->
        <div
          class="bg-gray-900 text-white absolute left-20 rounded-md top-2 shadow-md p-2 text-xs font-bold min-w-max group-hover:scale-100 transition-all duration-100 scale-0 origin-left"
        >
          Anthony Dayrit
        </div>
      </div>

      <!-- Divider -->
      <hr class="mx-2 rounded-full border-gray-700 border" />

      <!-- Icon 2 -->
      <div class="group relative">
        <img
          src="https://randomuser.me/api/portraits/women/0.jpg"
          alt="Icon 2"
          class="h-12 w-12 rounded-3xl mt-2 mb-2 mx-auto hover:rounded-xl transition-all ease-linear cursor-pointer shadow-lg"
        />

        <!-- Icon 2's Tooltip-->
        <div
          class="bg-gray-900 text-white absolute left-20 rounded-md top-2 shadow-md p-2 text-xs font-bold min-w-max group-hover:scale-100 transition-all duration-100 scale-0 origin-left"
        >
          Brishia Beltran
        </div>
      </div>

      <!-- Icon 3 -->
      <div class="group relative">
        <img
          src="https://randomuser.me/api/portraits/men/1.jpg"
          alt="Icon 3"
          class="h-12 w-12 rounded-3xl mt-2 mb-2 mx-auto hover:rounded-xl transition-all ease-linear cursor-pointer shadow-lg"
        />

        <!-- Icon 3's Tooltip-->
        <div
          class="bg-gray-900 text-white absolute left-20 rounded-md top-2 shadow-md p-2 text-xs font-bold min-w-max group-hover:scale-100 transition-all duration-100 scale-0 origin-left"
        >
          Keith Yamzon
        </div>
      </div>

      <!-- Icon 4 -->
      <div class="group relative">
        <img
          src="https://randomuser.me/api/portraits/women/1.jpg"
          alt="Icon 4"
          class="h-12 w-12 rounded-3xl mt-2 mb-2 mx-auto hover:rounded-xl transition-all ease-linear cursor-pointer shadow-lg"
        />

        <!-- Icon 4's Tooltip-->
        <div
          class="bg-gray-900 text-white absolute left-20 rounded-md top-2 shadow-md p-2 text-xs font-bold min-w-max group-hover:scale-100 transition-all duration-100 scale-0 origin-left"
        >
          Aeingel Pecson
        </div>
      </div>

      <!-- Divider -->
      <hr class="mx-2 rounded-full border-gray-700 border" />

      <!-- Icon 5 -->
      <div class="group relative">
        <img
          src="https://randomuser.me/api/portraits/men/2.jpg"
          alt="Icon 5"
          class="h-12 w-12 rounded-3xl mt-2 mb-2 mx-auto hover:rounded-xl transition-all ease-linear cursor-pointer shadow-lg"
        />

        <!-- Icon 5's Tooltip-->
        <div
          class="bg-gray-900 text-white absolute left-20 rounded-md top-2 shadow-md p-2 text-xs font-bold min-w-max group-hover:scale-100 transition-all duration-100 scale-0 origin-left"
        >
          Matt Ricohermoso
        </div>
      </div>
    </div>

    <!-- Main Content Container -->
    <div class="flex ml-16 h-screen">

      <!-- Group/Channel Bar -->
      <div class="bg-gray-800 w-80 p-4">

        <!-- Group Title -->
        <div class="flex items-center mb-4">
          <h5 class="text-gray-400 text-lg font-bold tracking-wider pt-0.5">
            Anthony's Group
          </h5>
        </div>

        <!-- Group Form Container -->
        <div class="bg-gray-700 p-4 rounded-lg">
          <form class="space-y-4">
            <!-- Amount Field -->
            <div>
              <label class="block text-gray-300 font-semibold">Amount</label>
              <input
                type="text"
                class="w-full mt-1 p-2 rounded-md bg-gray-600 text-white border-none"
                placeholder="Enter amount"
              />
            </div>

            <!-- Category Field -->
            <div>
              <label class="block text-gray-300 font-semibold">Category</label>
              <select
                class="w-full mt-1 p-2 rounded-md bg-gray-600 text-white border-none"
              >
                <option value="food">Food</option>
                <option value="transportation">Transportation</option>
                <option value="entertainment">Entertainment</option>
                <option value="miscellaneous">Miscellaneous</option>
              </select>
            </div>

            <!-- Description Field -->
            <div>
              <label class="block text-gray-300 font-semibold">Description</label>
              <input
                type="text"
                class="w-full mt-1 p-2 rounded-md bg-gray-600 text-white border-none"
                placeholder="Enter description"
              />
            </div>

            <!-- Type Field -->
            <div>
              <label class="block text-gray-300 font-semibold">Type</label>
              <select
                class="w-full mt-1 p-2 rounded-md bg-gray-600 text-white border-none"
              >
                <option value="income">Income</option>
                <option value="expense">Expense</option>
              </select>
            </div>

            <!-- Date Field -->
            <div>
              <label class="block text-gray-300 font-semibold">Date</label>
              <input
                type="date"
                class="w-full mt-1 p-2 rounded-md bg-gray-600 text-white border-none"
              />
            </div>

            <!-- Time Field -->
            <div>
              <label class="block text-gray-300 font-semibold">Time</label>
              <input
                type="time"
                class="w-full mt-1 p-2 rounded-md bg-gray-600 text-white border-none"
              />
            </div>

            <!-- Add Button -->
            <button
              type="submit"
              class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md"
            >
              Add
            </button>
          </form>
        </div>
      </div>


      <!-- Content and Member List Section -->
      <div class="flex-grow flex flex-col">
        
        <!-- Navigation Bar -->
        <div class="bg-gray-700 p-4 h-16 drop-shadow-lg ">
          <h5 class="text-white text-lg font-semibold flex items-center">
            <span class="text-gray-400 mr-2 text-3xl tracking-wider">#</span>
            Group Expense Record
          </h5>
        </div>

        <!-- Main Content and Members List -->
        <div class="flex flex-grow">
          
          <!-- Content Area -->
          <div class="flex-grow bg-gray-600 p-4">
            <p class="text-white">
              Main content goes here. This section can be used for chat messages
              or any primary content.
            </p>
          </div>

          <!-- Members List -->
          <div class="bg-gray-800 w-60 p-4">
            <h5 class="text-gray-400 text-lg font-bold tracking-wider">
              Members - 5
            </h5>
            <ul class="mt-4">
              <li class="text-white mb-2">Anthony Dayrit</li>
              <li class="text-white mb-2">Brishia Beltran</li>
              <li class="text-white mb-2">Keith Yamzon</li>
              <li class="text-white mb-2">Aeingel Pecson</li>
              <li class="text-white mb-2">Matt Ricohermoso</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<?php require('partials/footer.php') ?>