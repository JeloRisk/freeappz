<div class="relative max-w-xs text-gray-600 focus-within:text-gray-800 ml-4 flex h-[2rem] w-[40rem] flex-row items-center">
    <form action="/item-list?" class="flex-1 w-full relative">
        <input type="text" name="search_query"
            class="w-full h-8 pl-8 text-gray-700 placeholder-gray-600 bg-gray-200 rounded-lg shadow-md focus:bg-white"
            value="{{ $searchQuery ?? '' }}"
            placeholder="{{ __('Games Search') }}">
        <svg class="absolute right-3 top-1/2 transform -translate-y-1/2 h-5 w-5 focus:invert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" />
            <path d="M21 21l-4.35-4.35" />
        </svg>
    </form>
</div>

