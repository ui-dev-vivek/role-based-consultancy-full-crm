 <div class="bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8">

     <h3 class="text-3xl font-black text-slate-900 dark:text-white mb-6">
         Send a Message
     </h3>

     @if (session()->has('success'))
         <div class="mb-6 p-4 rounded-xl bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 text-green-700 dark:text-green-400">
             {{ session('success') }}
         </div>
     @endif

     <form wire:submit.prevent="submit" class="space-y-5">

         <div>
             <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">
                 Full Name
             </label>

             <input type="text" wire:model="name"
                 class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-4 py-3 focus:ring-2 focus:ring-cyan-500 outline-none">
             @error('name') <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span> @enderror
         </div>

         <div>
             <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">
                 Email Address
             </label>

             <input type="email" wire:model="email"
                 class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-4 py-3 focus:ring-2 focus:ring-cyan-500 outline-none">
             @error('email') <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span> @enderror
         </div>

         <div>
             <label class="block text-sm font-bold text-slate-700 dark:text-slate-300 mb-2">
                 Message
             </label>

             <textarea rows="5" wire:model="message"
                 class="w-full rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-4 py-3 focus:ring-2 focus:ring-cyan-500 outline-none"></textarea>
             @error('message') <span class="text-sm text-red-500 mt-1 block">{{ $message }}</span> @enderror
         </div>

         <button type="submit"
             class="w-full inline-flex items-center justify-center px-6 py-4 rounded-xl bg-cyan-600 hover:bg-cyan-500 text-white font-bold transition-all disabled:opacity-70 disabled:cursor-not-allowed"
             wire:loading.attr="disabled">
             <span wire:loading.remove wire:target="submit">Send Message</span>
             <span wire:loading wire:target="submit">Sending...</span>
         </button>

     </form>

 </div>
