<x-layouts.app>
    <h1 class="flex items-center justify-center uppercase font-serif text-3xl mb-15">Guide</h1>

    <div x-data="{
        openTab: 1,
        activeClasses: 'bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5',
        inactiveClasses: 'bg-transparent absolute inset-x-0 bottom-0 h-0.5'}">

        <div class="max-w-6xl mx-auto">
            <nav class="relative z-0 rounded-lg gap-10 md:gap-20 flex p-2" aria-label="Tabs">

                <a @click="openTab = 1" :class="openTab == 1 ? 'border-blue-500 text-blue-700 uppercase bg-blue-100' : 'border-blue-300 uppercase text-gray-700'" href="#"
                    class="text-center px-4 py-2 w-1/3 border-b-4 cursor-pointer hover:border-blue-500 transition">Watering
                </a>

                <a @click="openTab = 2" :class="openTab == 2 ? 'border-red-500 uppercase text-red-700 bg-red-100' : 'border-red-300 uppercase text-gray-700'"href="#" aria-current="false"
                class="text-center px-4 py-2 w-1/3 border-b-4 cursor-pointer hover:border-red-500 transition">Diseases
                </a>

                <a @click="openTab = 3" 
                :class="openTab == 3 ? 'border-green-500 uppercase text-green-700 bg-green-100' : 'border-green-300 uppercase text-gray-700'" href="#" aria-current="false"
                class="text-center px-4 py-2 w-1/3 border-b-4 cursor-pointer hover:border-green-500 transition">Propagation
                </a>

            </nav>
        </div>

        <div x-data="{ showModal: false, selectedCard: { title: '', src: '', description: '', extraInfo: '' } }">
            <div class="max-w-6xl rounded-bl rounded-br h-auto mx-auto flex flex-col w-full bg-white bg-opacity-50 p-2 items-center">
                <div x-show="openTab == 1" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                    <x-guide-card
                    src="deep_watering.jpg.webp"
                    title="Deep Watering"
                    description="Encourages deep root growth."
                    extraInfo="Best for houseplants that prefer infrequent but deep watering." />

                    <x-guide-card
                        src="misting.jpg"
                        title="Misting"
                        description="Increases humidity for tropical plants."
                        extraInfo="Good for ferns, orchids, and calatheas. Avoid misting succulents." />

                    <x-guide-card
                        src="bottom_watering.jpg"
                        title="Bottom Watering"
                        description="Allow roots to soak up moisture evenly." />

                    <x-guide-card
                        src="water_schedule.jpg"
                        title="Watering schedule"
                        description="Adjust based on season and plant type." />

                    <x-guide-card
                        src="moisture_test.jpg"
                        title="Soil Moisture Test"
                        description="Use a finger or moisture meter before watering" />

                    <x-guide-card
                        src="overwatering.jpg"
                        title="Avoid Overwatering"
                        description="Ensure drainage holes prevent soggy roots." />

                    <x-guide-card
                        src="rainwater.jpg.webp"
                        title="Rainwater Collection"
                        description="Use rainwater for natural minerals and soft hydration." />

                    <x-guide-card
                        src="selfwatering.jpg.webp"
                        title="Self-Watering Pots"
                        description="A great option for keeping moisture consistent." />
                </div>

                <div x-show="openTab == 2" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                    <x-guide-card
                        src="mildew.jpg.webp"
                        title="Powdery Mildew"
                        description="A common fungal disease affecting plants." />

                    <x-guide-card
                        src="leafspot.jpeg"
                        title="Leaf Spot"
                        description="Spots on leaves caused by bacteria or fungi." />

                    <x-guide-card
                        src="root_rot.webp"
                        title="Root rot"
                        description="Caused by overwatering and poor drainage. Leaves turn yellow and mushy." />

                    <x-guide-card
                        src="dampingoff.jpg"
                        title="Damping off"
                        description="Common in seedlings, causing stems to rot and collapse." />

                    <x-guide-card
                        src="botrytis.jpeg"
                        title="Botrytis (Gray Mold)"
                        description="Affects flowers and foliage with gray fuzzy mold." />

                    <x-guide-card
                        src="anthracnose.jpeg"
                        title="Anthracnose"
                        description="Causes dark, sunken lesions on leaves and stems." />

                    <x-guide-card
                        src="blight.webp"
                        title="Blight"
                        description="Rapid leaf and stem browning, often due to bacterial infection" />

                    <x-guide-card
                        src="rust.jpg"
                        title="Rust Disease"
                        description="Orange-brown pustules on leaf undersides, affecting photosynthesis." />
                </div>

                <div x-show="openTab == 3" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                    <x-guide-card 
                        src="stemcuttings.jpeg" 
                        title="Stem Cuttings" 
                        description="Cut a healthy stem and root it in water or soil for new growth." />

                    <x-guide-card 
                        src="leafcutting.png" 
                        title="Leaf Cuttings" 
                        description="Great for succulents; place a leaf on soil and wait for roots to form." />
                
                    <x-guide-card 
                        src="division.jpg.avif" 
                        title="Division" 
                        description="Separate plant clumps to create multiple healthy plants." />
                
                    <x-guide-card 
                        src="airlayering.jpg" 
                        title="Air Layering" 
                        description="Encourages roots to form on a stem while still attached to the plant." />
                
                    <x-guide-card 
                        src="waterpropagation.jpeg" 
                        title="Water Propagation" 
                        description="Place cuttings in water until roots appear, then transplant into soil." />
                
                    <x-guide-card 
                        src="rootcutting.jpg.jxl" 
                        title="Root Cuttings" 
                        description="Used for plants like mint and raspberry; plant cut root sections in soil." />
                
                    <x-guide-card 
                        src="offset.jpg" 
                        title="Offsets (Pups)" 
                        description="Small plantlets form around the base of the mother plant." />
                
                    <x-guide-card 
                        src="grafting.jpg" 
                        title="Grafting" 
                        description="Attach a cutting to a rootstock to create a hybrid plant." />
                </div>
            </div>

        <!-- Guide modal -->
        <x-guide-modal />
        </div>
    </div>

</x-layouts.app>