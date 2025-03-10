<div class="max-w-6xl mx-auto px-4 py-2 mt-10">
    <div class="flex flex-col md:flex-row gap-6">
        
        <div class="bg-white rounded-lg shadow overflow-hidden border border-gray-200 flex-1">
            <div class="flex items-center justify-between py-2 px-6">
                <span x-text="monthNames[currentMonth] + ' ' + currentYear" class="text-4xl uppercase text-gray-800"></span>
                <div class="px-1">
                    <button class="p-1" @click="prevMonth()">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button class="p-1" @click="nextMonth()">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Dny v týdnu -->
            <div class="-mx-1 -mb-1">
                <div class="flex flex-wrap">
                    <template x-for="day in days">
                        <div style="width: 14.26%" class="px-2 py-2 border-b border-gray-200">
                            <div class="w-1/7 px-2 py-2 text-center font-bold uppercase" x-text="day">
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Dny v měsíci -->
                <div class="flex flex-wrap">
                    <template x-for="i in firstDayOfMonth()"><div 
                        style="width: 14.28%; height: 120px"
                        class="text-center border-b border-gray-200 px-4 pt-2">
                    </div>
                    </template>

                    <template x-for="day in daysInMonth()" :key="day">
                        <div style="width: 14.28%; height: 120px" class="px-4 pt-2 border-b border-gray-200 relative">
                            <div @click="openModal(day)" x-text="day"
                                class="inline-flex w-6 h-6 items-center justify-center cursor-pointer rounded-full transition"
                                :class="{'bg-red-500 text-white': isToday(day), 'text-gray-700 hover:bg-red-200': !isToday(day)}">
                            </div>
                            <div class="flex justify-center mt-1 space-x-1">
                                <template x-if="events[formatDate(day)]">
                                    <template x-for="event in events[formatDate(day)]">
                                        <div class="w-full h-2 rounded-full cursor-pointer" 
                                            :style="'background-color: ' + event.color" 
                                            @click="openEventModal(event)">
                                        </div>
                                    </template>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

       <!-- Upcoming events --> 
        <div class="w-full md:w-1/3 bg-white rounded-lg shadow border border-gray-200 p-6 h-[500px] overflow-y-auto">
            <h2 class="text-xl font-bold text-gray-700 border-b border-gray-200 pb-2 mb-4">Upcoming Events</h2>
            <template x-for="(eventList, date) in filteredUpcomingEvents">
                <div class="mb-4">
                    <h3 class="text-lg font-semibold text-gray-800 border-b border-gray-200 pb-1" x-text="formatDateForList(date)"></h3>
                    <template x-for="event in eventList">
                        <div class="flex items-center justify-between mt-2 p-2 text-xs">
                            <div class="flex items-center space-x-2">
                                <span class="w-1 h-6 block" :style="'background-color: ' + event.color"></span>
                                <span :style="'color: ' + event.color" x-text="event.plant_name"></span>
                                <span :style="'color: ' + event.color" x-text="event.event_type === 'watering' ? '💧 Watering' : '🌱 Fertilizer'"></span>
                            </div>
                            <form method="POST" x-bind:action="'/events/' + event.id">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                                        <path d="M18 6 6 18"/><path d="m6 6 12 12"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </template>
                </div>
            </template>
        </div>
    </div>

    <!-- Modal -->
    <div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="showModal">
        <div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
            <div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
                @click="closeModal()">
                <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                </svg>
            </div>

        <!-- Formulář pro přidání eventu -->
        <div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">
            <h2 class="font-bold text-2xl mb-6 text-green-800 border-b pb-2">Add Event Details</h2>

            <form method="POST" action="{{ route('events.store') }}">

                @csrf
                <input type="hidden" name="event_date" x-model="selectedDate">
                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Choose a plant</label>
                        <div class="relative">
                            <select name="plant_id" class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 px-4 py-2 pr-8 rounded-lg">

                            @foreach(auth()->user()->plants as $plant)
                                <option value="{{ $plant->id }}">{{ $plant->name }}</option>
                            @endforeach

                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Datum eventu -->
                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event date</label>
                        <input name="event_date" type="date" x-model="selectedDate" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">
                    </div>
            
                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select an event</label>
                        <div class="relative">
                            <select name="event_type" class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 px-4 py-2 pr-8 rounded-lg">
                                <option value="watering">💧 Watering</option>
                                <option value="fertilizer">🌱 Fertilizer</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Výběr barvy -->
                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select color</label>
                        <div class="relative">
                            <input type="color" name="color" x-model="selectedColor" class="w-full h-10 border-2 border-gray-300 rounded-lg cursor-pointer">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
            
                    <!-- Poznámky -->
                    <div class="mb-4">
                        <label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Notes</label>
                        <textarea name="notes" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500">{{ old('notes') }}</textarea>
                    </div>

                    <!-- Uložení -->
                    <div class="mt-8 text-right">
                        <button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="closeModal">
                            Cancel
                        </button>   
                        <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm">
                            Save Event
                        </button>   
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 🛑 Modal pro smazání eventu -->
    <div x-show="showEventModal" style="background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full flex items-center justify-center">
        <div class="p-4 max-w-md bg-white rounded-lg shadow-lg relative">
            <button @click="showEventModal = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800">
                ✖
            </button>
            <h2 class="text-xl font-bold text-gray-700 mb-4">Event Details</h2>

            <p><strong>Plant:</strong> <span x-text="selectedEvent?.plant_name"></span></p>
            <p><strong>Type:</strong> <span x-text="selectedEvent?.event_type === 'watering' ? '💧 Watering' : '🌱 Fertilizer'"></span></p>
            <p><strong>Date:</strong> <span x-text="selectedEvent?.event_date"></span></p>
            
            <form method="POST" x-bind:action="'/events/' + selectedEvent?.id" class="mt-4">
                @csrf
                @method('DELETE')
                <x-button>Delete</x-button>
            </form>
        </div>
    </div>
    
</div>