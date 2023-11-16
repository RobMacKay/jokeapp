<div class="mx-auto max-w-full md:max-w-xl2 p-4 flex items-center justify-center flex-col w-full">
   <div class="min-w-full md:min-w-0 md:w-1/2 p-4 bg-slate-100 text-slate-800 dark:text-slate-300 dark:bg-slate-900 rounded drop-shadow mb-10 flex border-b-4 border-t-8 border-cyan-400">
    <div class="text-slate-700 pr-4">
        <p>1</p>
        <p>2</p>
        <p>3</p>
        <p>4</p>
        <p>5</p>
        <p>6</p>
    </div>
    <div>
     {!!$joke!!}
    </div>
   </div>
   <button wire:click="newJoke" wire:loading.attr="disabled" class="text-white font-bold bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 disabled:bg-slate-600 disabled:opacity-75">New Joke</button>
</div>
