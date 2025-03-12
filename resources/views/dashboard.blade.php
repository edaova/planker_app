<x-layouts.app>
    <h1 class="flex items-center justify-center uppercase font-serif text-3xl mb-15">Dashboard</h1>

	<div class="p-4 max-w-6xl mx-auto ">
		<h2 id="date" class="text-xl uppercase"></h2>
		<h1 id="greetings" class="text-4xl font-semibold uppercase"></h1>
	</div>

    <div x-data="{ activeTab: '{{ request('tab', 'calendar') }}' }" class="max-w-6xl mx-auto p-6 mt-20 mb-10">
        <!-- Tab buttons -->
        <div class="flex gap-4 border-b border-gray-200 pb-2">
            <button @click="activeTab = 'calendar'"; window.history.pushState({}, '', '?tab=calendar');"
                :class="{'border-b-2 border-red-300 text-red-500 font-bold': activeTab === 'calendar'}"
                class="transition px-4 py-2 uppercase font-semibold cursor-pointer">
                📅 Calendar
            </button>

            <button @click="activeTab = 'plants'"; window.history.pushState({}, '', '?tab=plants');"
                :class="{'border-b-2 border-red-300 text-red-500 font-bold': activeTab === 'plants'}"
                class="transition px-4 py-2 uppercase font-semibold cursor-pointer">
                🌱 My Plants
            </button>
        </div>
    
        <!-- Kalendář Tab -->
        <div x-show="activeTab === 'calendar'">
            <div x-data="calendar()">
                <x-calendar />
            </div>
        </div>

        <!-- My Plants Tab -->
        <div x-show="activeTab === 'plants'">
            <x-myplant />
        </div>
    </div>

<script>
var date = new Date();
let text = date.toDateString();
document.getElementById("date").innerHTML = text;

let userName = document.querySelector("meta[name='user-name']").getAttribute("content");

const time = new Date().getHours();
let greeting;

if (time < 10) {
    greeting = "Good morning";
} else if (time < 20) {
    greeting = "Good day";
} else {
    greeting = "Good evening";
}

// Zobrazení pozdravu
document.getElementById("greetings").innerHTML = `${greeting}, ${userName}!`;

function tabs() {
    return {
        activeTab: 'calendar'
    };
}

function calendar() {
    return {
        currentMonth: new Date().getMonth(),
        currentYear: new Date().getFullYear(),
        monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        days: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        showModal: false,
        showEventModal: false,
        selectedEvent: null,
        selectedDate: null,
        selectedPlant: '',
        selectedType: 'watering',
        selectedColor: '#4CAF50',
        events: @json($events ?? []),

        daysInMonth() {
            return new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
        },

        firstDayOfMonth() {
            let firstDay = new Date(this.currentYear, this.currentMonth, 1).getDay();
            return firstDay === 0 ? 6 : firstDay - 1; // Posun na pondělí jako první den
        },

        isToday(day) {
            let today = new Date();
            return day === today.getDate() && this.currentMonth === today.getMonth() && this.currentYear === today.getFullYear();
        },

        formatDate(day) {
            return `${this.currentYear}-${String(this.currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`
        },

        openModal(day) {
            let rawDate = new Date(this.currentYear, this.currentMonth, day);
            this.selectedDate = `${this.currentYear}-${String(this.currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            this.selectedColor = '#4CAF50';
            this.showModal = true;
        },

        closeModal() {
            this.showModal = false;
            this.selectedPlant = '';
            this.selectedType = 'watering';
        },

        openEventModal(event) {
            this.selectedEvent = event;
            this.showEventModal = true;
        },

        closeEventModal() {
            this.showEventModal = false;
            this.selectedEvent = null;
        },

        prevMonth() {
            this.currentMonth--;
            if (this.currentMonth < 0) {
                this.currentMonth = 11;
                this.currentYear--;
            }
        },

        nextMonth() {
            this.currentMonth++;
            if (this.currentMonth > 11) {
                this.currentMonth = 0;
                this.currentYear++;
            }
        },

        formatDateForList(date) {
            let options = { weekday: 'short', month: 'short', day: 'numeric' };
            return new Date(date).toLocaleDateString('en-US', options);
        },

        get filteredUpcomingEvents() {
            return Object.keys(this.events)
                .filter(date => new Date(date) >= new Date()) // Pouze budoucí eventy
                .reduce((acc, date) => ({ ...acc, [date]: this.events[date] }), {});
        },

        get filteredInProgressEvents() {
            return Object.keys(this.events)
                .reduce((acc, date) => {
                    let filteredEvents = this.events[date].filter(event => event.status && event.status === 'in_progress');
                    if (filteredEvents.length) acc[date] = filteredEvents;
                    return acc;
                }, {});
        },

        get filteredDoneEvents() {
            return Object.keys(this.events)
                .reduce((acc, date) => {
                    let filteredEvents = this.events[date].filter(event => event.status && event.status === 'done');
                    if (filteredEvents.length) acc[date] = filteredEvents;
                    return acc;
                }, {});
        },

        updateEvents(eventId, newStatus, event) {
            // Aktualizace statusu přímo v seznamu eventů
            Object.keys(this.events).forEach(date => {
                this.events[date].forEach(eventItem => {
                    if (eventItem.id === eventId) {
                        eventItem.status = newStatus;
                    }
                });
            });

            // Aktualizace hidden inputu
            let hiddenInput = event.target.querySelector('input[name="status"]');
            hiddenInput.value = newStatus;

            // Odeslání formuláře
            setTimeout(() => {
                event.target.submit();
            }, 100);
        }
    };
}
</script>
</x-layouts.app>